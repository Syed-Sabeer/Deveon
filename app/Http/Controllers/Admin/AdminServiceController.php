<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public function toggleVisibility(Request $request, $id)
    {
        try {
            $service = Service::findOrFail($id);
            // Toggle the visibility: if it's 1, make it 0; if it's 0, make it 1
            $service->visibility = $service->visibility ? 0 : 1;
            $service->save();
            
            return redirect()->route('admin.service.index')->with('success', 'Service visibility updated successfully.');
        } catch (\Exception $e) {
            Log::error('Service visibility toggle error:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors('Could not update Service visibility.');
        }
    }

    public function index()
    {
        $services = Service::all();
        return view('admin.crud.services.index', compact('services'));
    }

    public function add()
    {
        return view('admin.crud.services.add');
    }

public function store(Request $request)
{
    try {
        // Validate input
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'nullable|string|max:255',
            'visibility' => 'nullable|integer',
        ]);

        $data = [
            'heading' => $request->heading,
            'description' => $request->description,
            'icon' => $request->icon,
            'visibility' => $request->visibility ?? 1,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . preg_replace('/\s+/', '_', $image->getClientOriginalName());
            $image->move(public_path('uploads/services'), $imageName);
            $data['image'] = 'uploads/services/' . $imageName;
        }

        // Handle FAQs — save JSON arrays into separate columns
        $faqQuestions = [];
        $faqAnswers = [];

        if ($request->has('faq_question')) {
            foreach ($request->faq_question as $index => $question) {
                $answer = $request->faq_answer[$index] ?? '';
                if (!empty($question) || !empty($answer)) {
                    $faqQuestions[] = $question;
                    $faqAnswers[] = $answer;
                }
            }
        }

        $data['faq_question'] = !empty($faqQuestions) ? json_encode($faqQuestions) : null;
        $data['faq_answer'] = !empty($faqAnswers) ? json_encode($faqAnswers) : null;

        // Create service
        $service = Service::create($data);

        Log::info('Service created successfully.', [
            'id' => $service->id,
            'slug' => $service->slug,
        ]);

        return redirect()
            ->route('admin.service.index')
            ->with('success', 'Service added successfully.');
    } catch (\Exception $e) {
        Log::error('Error creating service:', [
            'message' => $e->getMessage(),
            'line' => $e->getLine(),
            'file' => $e->getFile(),
        ]);

        return redirect()
            ->back()
            ->withErrors('Error: ' . $e->getMessage())
            ->withInput();
    }
}



    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.crud.services.edit', compact('service'));
    }

public function update(Request $request, $id)
{
    try {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'nullable|string|max:255',
            'visibility' => 'nullable|integer',
        ]);

        $service = Service::findOrFail($id);

        $headingChanged = $service->heading !== $request->heading;

        $updateData = [
            'heading' => $request->heading,
            'description' => $request->description,
            'icon' => $request->icon,
            'visibility' => $request->visibility ?? 1,
        ];

        // Handle FAQs — store JSON strings in their respective columns
        $faqQuestions = [];
        $faqAnswers = [];

        if ($request->has('faq_question')) {
            foreach ($request->faq_question as $index => $question) {
                $answer = $request->faq_answer[$index] ?? '';
                if (!empty($question) || !empty($answer)) {
                    $faqQuestions[] = $question;
                    $faqAnswers[] = $answer;
                }
            }
        }

        $updateData['faq_question'] = !empty($faqQuestions) ? json_encode($faqQuestions) : null;
        $updateData['faq_answer'] = !empty($faqAnswers) ? json_encode($faqAnswers) : null;

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . preg_replace('/\s+/', '_', $image->getClientOriginalName());
            $image->move(public_path('uploads/services'), $imageName);
            $updateData['image'] = 'uploads/services/' . $imageName;
        }

        if ($headingChanged) {
            $updateData['slug'] = null;
        }

        $service->update($updateData);

        Log::info('Service updated successfully:', [
            'id' => $service->id,
            'slug' => $service->fresh()->slug,
        ]);

        return redirect()
            ->route('admin.service.index')
            ->with('success', 'Service updated successfully.');
    } catch (\Exception $e) {
        Log::error('Service update error:', [
            'message' => $e->getMessage(),
            'line' => $e->getLine(),
        ]);
        return redirect()
            ->back()
            ->withErrors($e->getMessage())
            ->withInput();
    }
}


    public function destroy($id)
    {
        try {
            $service = Service::findOrFail($id);
            
            // Delete associated files
            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }
            
            $service->delete();
            return redirect()->route('admin.service.index')->with('success', 'Service deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Service delete error:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors('Could not delete Service.');
        }
    }
}
