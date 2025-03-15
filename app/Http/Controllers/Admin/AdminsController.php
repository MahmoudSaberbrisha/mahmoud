<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\RulesAndPermissions;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    // Display a listing of the admins
    public function index()
    {
        $admins = Admin::all();
        $rules = RulesAndPermissions::all(); // Fetch all rules and permissions
        return view('admin.pages.admins', compact('admins', 'rules')); // Pass rules to the view
    }

    // Assign the selected rule to the admin
    public function assignRule(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $roleName = RulesAndPermissions::findOrFail($request->input('rule_id'))->name; // Get the role name
        $admin->assignRole($roleName); // Assign the role by name
        return redirect()->route('admins.index')->with('success', 'Rule assigned successfully.');
    }
    public function create()
    {
        return view('admin.pages.create_admin');
    }

    // Store a newly created admin in storage
    public function store(AdminRequest $request)
    {
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admins.index')->with('success', 'Admin created successfully.');
    }

    // Display the specified admin
    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.pages.show_admin', compact('admin'));
    }

    // Show the form for editing the specified admin
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.pages.edit_admin', compact('admin'));
    }

    // Update the specified admin in storage
    public function update(AdminRequest $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($request->filled('password')) {
            $admin->password = bcrypt($request->password);
        }
        $admin->save();

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully.');
    }

    // Remove the specified admin from storage
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully.');
    }
}
