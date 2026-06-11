<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class CreateAdmin extends Command
{
    protected $signature = 'admin:create {--name=} {--email=} {--role=owner}';

    protected $description = 'Create a secure administrator account';

    public function handle(): int
    {
        $data = [
            'name' => $this->option('name') ?: $this->ask('Administrator name'),
            'email' => $this->option('email') ?: $this->ask('Email address'),
            'role' => $this->option('role'),
            'password' => $this->secret('Password (12+ characters, mixed case, number, symbol)'),
        ];

        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:254', 'unique:admins,email'],
            'role' => ['required', 'in:owner,editor'],
            'password' => ['required', Password::min(12)->mixedCase()->numbers()->symbols()->uncompromised()],
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return self::FAILURE;
        }

        Admin::query()->create([...$data, 'is_active' => true]);
        $this->info("Administrator {$data['email']} created.");

        return self::SUCCESS;
    }
}
