<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use App\Mail\InquirySubmitted;
use App\Models\Inquiry;
use App\Support\SiteSettings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Throwable;

class InquiryController extends Controller
{
    public function __invoke(StoreInquiryRequest $request, SiteSettings $settings): RedirectResponse
    {
        $inquiryData = $request->safe()->only([
            'name',
            'email',
            'phone',
            'service',
            'message',
            'source',
        ]);

        Inquiry::query()->create($inquiryData);

        try {
            Mail::to($settings->get('email', config('mail.inquiries_to')))->send(new InquirySubmitted($inquiryData));
        } catch (Throwable $exception) {
            report($exception);

            return back()->with('inquiry_success', 'Thank you. Your inquiry has been received and our project team will contact you.');
        }

        return back()->with('inquiry_success', 'Thank you. Your inquiry has been sent to our project team.');
    }
}
