<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        try {
            return view('frontend.pages.home');
        } catch (\Throwable $th) {
            Log::error('Home View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function about()
    {
        try {
            return view('frontend.pages.about');
        } catch (\Throwable $th) {
            Log::error('About View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function howItWorks()
    {
        try {
            return view('frontend.pages.how-it-works');
        } catch (\Throwable $th) {
            Log::error('How It Works View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function faqs()
    {
        try {
            return view('frontend.pages.faqs');
        } catch (\Throwable $th) {
            Log::error('FAQs View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function contact()
    {
        try {
            return view('frontend.pages.contact');
        } catch (\Throwable $th) {
            Log::error('Contact View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string|max:1000',
            'document' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'damage_images.*' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        try {
            // Admin email
            $adminEmail = env('ADMIN_EMAIL', 'admin@example.com');

            // Send using Blade view
            Mail::send('mails.contact-admin-mail', [
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'messageText' => $validated['message'] ?? 'Keine',
            ], function ($message) use ($request, $adminEmail) {
                $message->to($adminEmail)
                    ->subject('Neue Termin-Anfrage');

                // Attach files
                if ($request->hasFile('document')) {
                    $message->attach($request->file('document')->getRealPath(), [
                        'as' => $request->file('document')->getClientOriginalName(),
                        'mime' => $request->file('document')->getMimeType(),
                    ]);
                }

                if ($request->hasFile('damage_images')) {
                    foreach ($request->file('damage_images') as $image) {
                        $message->attach($image->getRealPath(), [
                            'as' => $image->getClientOriginalName(),
                            'mime' => $image->getMimeType(),
                        ]);
                    }
                }
            });

            return back()->with('success', 'Ihre Anfrage wurde erfolgreich gesendet!');
        } catch (\Throwable $th) {
            Log::error('Contact View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function privacyPolicy()
    {
        try {
            return view('frontend.pages.privacy-policy');
        } catch (\Throwable $th) {
            Log::error('Privacy Policy View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function termsConditions()
    {
        try {
            return view('frontend.pages.terms');
        } catch (\Throwable $th) {
            Log::error('Term View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function imprint()
    {
        try {
            return view('frontend.pages.imprint');
        } catch (\Throwable $th) {
            Log::error('Imprint View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
