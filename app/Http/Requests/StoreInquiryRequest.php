<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use Throwable;

class StoreInquiryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:100', 'not_regex:/[\x00-\x1F\x7F]/'],
            'email' => ['required', 'email:rfc', 'max:254'],
            'phone' => ['nullable', 'string', 'max:40', 'regex:/^[0-9+().\s-]+$/'],
            'service' => ['nullable', 'string', 'max:150', 'not_regex:/[\x00-\x1F\x7F]/'],
            'message' => ['required', 'string', 'min:15', 'max:5000'],
            'source' => ['required', 'in:home,contact'],
            'website' => ['nullable', 'max:0'],
            'form_token' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'phone.regex' => 'Please enter a valid phone number.',
            'website.max' => 'Your inquiry could not be submitted.',
            'form_token.required' => 'Please refresh the page and try again.',
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator): void {
            try {
                $startedAt = (int) decrypt($this->string('form_token')->toString());
            } catch (Throwable) {
                $validator->errors()->add('form_token', 'Please refresh the page and try again.');

                return;
            }

            $elapsed = now()->timestamp - $startedAt;

            if ($elapsed < 2 || $elapsed > 7200) {
                $validator->errors()->add('form_token', 'Please refresh the page and try again.');
            }

            if (preg_match_all('/(?:https?:\/\/|www\.)/i', $this->string('message')->toString()) > 3) {
                $validator->errors()->add('message', 'Please remove excessive links from your message.');
            }
        });
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => trim($this->string('name')->toString()),
            'email' => trim($this->string('email')->toString()),
            'phone' => trim($this->string('phone')->toString()),
            'service' => trim($this->string('service')->toString()),
            'message' => trim($this->string('message')->toString()),
        ]);
    }
}
