<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use App\Mail\InquirySubmitted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Throwable;

class InquiryController extends Controller
{
    public function __invoke(StoreInquiryRequest $request): RedirectResponse
    {
        $inquiry = $request->safe()->only([
            'name',
            'email',
            'phone',
            'service',
            'message',
            'source',
        ]);

        try {
            Mail::to(config('mail.inquiries_to'))->send(new InquirySubmitted($inquiry));
        } catch (Throwable $exception) {
            report($exception);

            return back()->with('inquiry_error', 'We could not send your inquiry right now. Please call or email our project team.');
        }

        return back()->with('inquiry_success', 'Thank you. Your inquiry has been sent to our project team.');
    }
}
