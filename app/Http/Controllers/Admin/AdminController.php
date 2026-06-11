<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Support\AdminActivity;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.administrators.index', ['admins' => Admin::query()->latest()->get()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:254', 'unique:admins,email'],
            'role' => ['required', Rule::in(['owner', 'editor'])],
            'password' => ['required', 'confirmed', Password::min(12)->mixedCase()->numbers()->symbols()->uncompromised()],
        ]);
        $admin = Admin::query()->create([...$validated, 'is_active' => true]);
        AdminActivity::log('admin_created', "Created administrator {$admin->email}.", $admin, ['role' => $admin->role]);

        return back()->with('success', 'Administrator created.');
    }

    public function update(Request $request, Admin $admin): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:254', Rule::unique('admins', 'email')->ignore($admin)],
            'role' => ['required', Rule::in(['owner', 'editor'])],
            'is_active' => ['nullable', 'boolean'],
            'password' => ['nullable', 'confirmed', Password::min(12)->mixedCase()->numbers()->symbols()->uncompromised()],
        ]);

        if ($admin->is(auth('admin')->user())) {
            $validated['role'] = 'owner';
            $validated['is_active'] = true;
        } else {
            $validated['is_active'] = $request->boolean('is_active');
        }

        if (blank($validated['password'] ?? null)) {
            unset($validated['password']);
        }

        $admin->update($validated);
        AdminActivity::log('admin_updated', "Updated administrator {$admin->email}.", $admin, ['role' => $admin->role]);

        return back()->with('success', 'Administrator updated.');
    }

    public function destroy(Admin $admin): RedirectResponse
    {
        abort_if($admin->is(auth('admin')->user()), 422, 'You cannot delete your own account.');
        AdminActivity::log('admin_deleted', "Deleted administrator {$admin->email}.", $admin);
        $admin->delete();

        return back()->with('success', 'Administrator deleted.');
    }
}
