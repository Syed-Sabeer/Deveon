<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:255',
                'linkedin_url' => 'nullable|url|max:500',
                'current_job_place' => 'nullable|string|max:255',
                'current_job_position' => 'nullable|string|max:255',
                'current_salary' => 'nullable|string|max:255',
                'yearofexperince' => 'required|string|max:255',
                'applied_for' => 'required|string|max:255',
                'expected_salary' => 'required|string|max:255',
                'resume_file' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
                'covering_letter' => 'nullable|string',
            ]);

            // Check for duplicate submission (same email and applied_for within last 30 seconds)
            $recentSubmission = Job::where('email', $request->email)
                ->where('applied_for', $request->applied_for)
                ->where('created_at', '>=', now()->subSeconds(30))
                ->first();

            if ($recentSubmission) {
                Log::warning('Duplicate job application submission detected:', [
                    'email' => $request->email,
                    'applied_for' => $request->applied_for,
                    'existing_id' => $recentSubmission->id,
                    'timestamp' => now()
                ]);

                return response()->json([
                    'status' => 'error',
                    'title' => 'Duplicate Submission!',
                    'message' => 'You have already submitted an application for this position recently. Please wait before submitting again.',
                    'icon' => 'warning'
                ], 422);
            }

            Log::info('Processing job application submission:', [
                'email' => $request->email,
                'applied_for' => $request->applied_for,
                'timestamp' => now()
            ]);

            // Use database transaction to ensure atomicity
            $jobApplication = DB::transaction(function () use ($request) {
                // Double-check for duplicates within the transaction
                $recentSubmission = Job::where('email', $request->email)
                    ->where('applied_for', $request->applied_for)
                    ->where('created_at', '>=', now()->subSeconds(30))
                    ->lockForUpdate()
                    ->first();

                if ($recentSubmission) {
                    throw new \Exception('Duplicate submission detected within transaction');
                }

                // Handle file upload
                $resumePath = null;
                if ($request->hasFile('resume_file')) {
                    $file = $request->file('resume_file');
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    
                    // Store in /public/uploads/jobs/
                    $destinationPath = public_path('uploads/jobs');
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0777, true);
                    }
                    
                    $file->move($destinationPath, $fileName);
                    $resumePath = 'uploads/jobs/' . $fileName;
                }

                return Job::create([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'linkedin_url' => $request->linkedin_url,
                    'current_job_place' => $request->current_job_place,
                    'current_job_position' => $request->current_job_position,
                    'current_salary' => $request->current_salary,
                    'yearofexperince' => $request->yearofexperince,
                    'applied_for' => $request->applied_for,
                    'expected_salary' => $request->expected_salary,
                    'resume_file' => $resumePath,
                    'covering_letter' => $request->covering_letter,
                ]);
            });

            Log::info('Job application submitted successfully:', ['id' => $jobApplication->id]);

            return response()->json([
                'status' => 'success',
                'title' => 'Application Submitted!',
                'message' => 'Thank you for your application! We will review it and get back to you soon.',
                'icon' => 'success'
            ], 200);

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Job application validation error:', ['errors' => $e->errors()]);

            return response()->json([
                'status' => 'error',
                'title' => 'Validation Error!',
                'message' => 'Please check your input and try again.',
                'errors' => $e->errors(),
                'icon' => 'error'
            ], 422);

        } catch (\Exception $e) {
            Log::error('Job application submission error:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'status' => 'error',
                'title' => 'Error!',
                'message' => 'Something went wrong. Please try again later.',
                'icon' => 'error'
            ], 500);
        }
    }
}


