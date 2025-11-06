<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class AdminCareerController extends Controller
{
    public function index()
    {
        $careers = Career::all();
        return view('admin.crud.careers.index', compact('careers'));
    }

    public function add()
    {
        return view('admin.crud.careers.add');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'job_type' => 'required|string|max:255',
                'summary' => 'required|string',
                'responsibilities' => 'required|array',
                'responsibilities.*' => 'required|string',
                'location' => 'nullable|string|max:255',
                'education' => 'nullable|string|max:255',
                'experience' => 'nullable|string|max:255',
                'salary_range' => 'nullable|string|max:255',
                'visibility' => 'nullable|integer',
            ]);

            // Convert responsibilities array - Laravel will auto-encode to JSON via cast
            $responsibilities = $request->input('responsibilities', []);
            $responsibilities = array_values(array_filter($responsibilities)); // Remove empty values and reindex

            $career = Career::create([
                'title' => $request->title,
                'job_type' => $request->job_type,
                'summary' => $request->summary,
                'responsiblities' => $responsibilities,
                'location' => $request->location,
                'education' => $request->education,
                'experience' => $request->experience,
                'salary_range' => $request->salary_range,
                'visibility' => $request->visibility ?? 1,
            ]);

            Log::info('Career created successfully:', ['id' => $career->id]);

            return redirect()->route('admin.career.index')->with('success', 'Career added successfully.');
        } catch (\Exception $e) {
            Log::error('Error while creating career:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.crud.careers.edit', compact('career'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'job_type' => 'required|string|max:255',
                'summary' => 'required|string',
                'responsibilities' => 'required|array',
                'responsibilities.*' => 'required|string',
                'location' => 'nullable|string|max:255',
                'education' => 'nullable|string|max:255',
                'experience' => 'nullable|string|max:255',
                'salary_range' => 'nullable|string|max:255',
                'visibility' => 'nullable|integer',
            ]);

            $career = Career::findOrFail($id);

            // Convert responsibilities array - Laravel will auto-encode to JSON via cast
            $responsibilities = $request->input('responsibilities', []);
            $responsibilities = array_values(array_filter($responsibilities)); // Remove empty values and reindex

            $updateData = [
                'title' => $request->title,
                'job_type' => $request->job_type,
                'summary' => $request->summary,
                'responsiblities' => $responsibilities,
                'location' => $request->location,
                'education' => $request->education,
                'experience' => $request->experience,
                'salary_range' => $request->salary_range,
                'visibility' => $request->visibility ?? 1,
            ];

            $career->update($updateData);

            return redirect()->route('admin.career.index')->with('success', 'Career updated successfully.');
        } catch (\Exception $e) {
            Log::error('Career update error:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $career = Career::findOrFail($id);
            $career->delete();
            return redirect()->route('admin.career.index')->with('success', 'Career deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Career delete error:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors('Could not delete career.');
        }
    }

    public function toggleVisibility(Request $request, $id)
    {
        try {
            $career = Career::findOrFail($id);
            // Toggle the visibility: if it's 1, make it 0; if it's 0, make it 1
            $career->visibility = $career->visibility ? 0 : 1;
            $career->save();
            
            return redirect()->route('admin.career.index')->with('success', 'Career visibility updated successfully.');
        } catch (\Exception $e) {
            Log::error('Career visibility toggle error:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors('Could not update career visibility.');
        }
    }
}

