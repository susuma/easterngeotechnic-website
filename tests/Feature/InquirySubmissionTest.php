<?php

use App\Mail\InquirySubmitted;
use Illuminate\Support\Facades\Mail;

function validInquiry(array $overrides = []): array
{
    return array_merge([
        'name' => 'Asha Mushi',
        'email' => 'asha@example.com',
        'phone' => '+255 712 345 678',
        'service' => 'Foundation investigation',
        'message' => 'Please contact us regarding a proposed commercial development.',
        'source' => 'contact',
        'website' => '',
        'form_token' => encrypt(now()->subSeconds(3)->timestamp),
    ], $overrides);
}

test('a valid inquiry is emailed to the project team', function () {
    Mail::fake();

    $response = $this
        ->withServerVariables(['REMOTE_ADDR' => '10.0.0.1'])
        ->post(route('inquiries.store'), validInquiry());

    $response->assertRedirect();
    $response->assertSessionHas('inquiry_success');

    Mail::assertSent(InquirySubmitted::class, function (InquirySubmitted $mail): bool {
        return $mail->hasTo('projects@easterngeotechnics.co.tz')
            && $mail->inquiry['email'] === 'asha@example.com';
    });
});

test('inquiries are validated before email is sent', function () {
    Mail::fake();

    $response = $this
        ->withServerVariables(['REMOTE_ADDR' => '10.0.0.2'])
        ->post(route('inquiries.store'), validInquiry([
            'email' => 'not-an-email',
            'message' => 'short',
        ]));

    $response->assertSessionHasErrors(['email', 'message']);
    Mail::assertNothingSent();
});

test('honeypot and rapid bot submissions are rejected', function () {
    Mail::fake();

    $honeypotResponse = $this
        ->withServerVariables(['REMOTE_ADDR' => '10.0.0.3'])
        ->post(route('inquiries.store'), validInquiry(['website' => 'spam.example']));

    $honeypotResponse->assertSessionHasErrors('website');

    $rapidResponse = $this
        ->withServerVariables(['REMOTE_ADDR' => '10.0.0.4'])
        ->post(route('inquiries.store'), validInquiry([
            'form_token' => encrypt(now()->timestamp),
        ]));

    $rapidResponse->assertSessionHasErrors('form_token');
    Mail::assertNothingSent();
});

test('inquiry submissions are rate limited', function () {
    Mail::fake();

    for ($attempt = 1; $attempt <= 3; $attempt++) {
        $this
            ->withServerVariables(['REMOTE_ADDR' => '10.0.0.5'])
            ->post(route('inquiries.store'), validInquiry())
            ->assertRedirect();
    }

    $this
        ->withServerVariables(['REMOTE_ADDR' => '10.0.0.5'])
        ->post(route('inquiries.store'), validInquiry())
        ->assertTooManyRequests();
});
