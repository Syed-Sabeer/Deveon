<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\NewNewsletter;
use App\Models\PrivacyPolicy;
use App\Models\OurCompany;
use App\Models\OurCompanyCmsPage;
use App\Models\Service;
use App\Models\MiniService;
use App\Models\CompanyWelcome;
use App\Models\CmsServicePage;
use App\Models\Career;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
public function privacyPolicy(){
    $privacyPolicy = PrivacyPolicy::where('visibility', 1)->get();
    return view('frontend.privacy-policy', compact('privacyPolicy'));
}

public function portfolio(){

    return view('frontend.portfolio');
}

public function career(){
    $careers = Career::where('visibility', 1)->get();
    return view('frontend.career', compact('careers'));
}
public function faq(){
    $faqs = Faq::all();
    return view('frontend.faqs', compact('faqs'));
}



public function service(Request $request){
    $services = Service::where('visibility', 1)->get();

    $services_cms = CmsServicePage::first();

    return view('frontend.service', compact('services', 'miniServices', 'services_cms', 'companyWelcome'));
}

public function serviceDetail($slug)
{

    $service = Service::where('slug', $slug)
        ->where('visibility', 1)
        ->firstOrFail();


    $services = Service::where('visibility', 1)
        ->orderBy('id', 'asc')
        ->get();

    return view('frontend.service-detail', compact('service', 'services'));
}



public function subscribeNewsletter(Request $request)
{
    try {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please provide a valid email address.',
                'errors' => $validator->errors()
            ], 422);
        }

        $email = $request->email;

        $existingNewsletter = NewNewsletter::where('email', $email)->first();

        if ($existingNewsletter) {
            return response()->json([
                'success' => false,
                'message' => 'This email is already subscribed to our newsletter!'
            ], 409);
        }

        $newsletter = NewNewsletter::create([
            'email' => $email,
        ]);

        if ($newsletter) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for subscribing to our newsletter! You will receive updates soon.'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'An error occurred. Please try again later.'
        ], 500);
    }
}
}
