<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RulesAndPermissions; // Import the model
use App\Models\Admin; // Import the Admin model
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class RulesAndPermissionsController extends Controller
{
    // Display a listing of the rules and permissions
    public function index()
    {
        $rules = RulesAndPermissions::all(); // Retrieve all rules and permissions
        return view('admin.pages.rules_permissions.index', compact('rules')); // Pass to the view
    }

    public function rules()
    {
        // $admin = Auth::guard('admin')->user(); // Get the authenticated admin
        // if ($admin->rules->isEmpty()) {
        //     return redirect()->route('admin.masterpage')->with('error', 'لا توجد صلاحيات محددة لهذا الادمن.'); // Redirect if no rules are assigned
        // }

        $rules = RulesAndPermissions::all(); // Retrieve all rules and permissions
        return view('admin.pages.rules', compact('rules')); // Pass to the view
    }

    // Show the form for creating a new rule or permission
    public function create()
    {
        return view('admin.pages.rules_permissions.create'); // Example view
    }

    // Store a newly created rule or permission in storage
    public function store(Request $request)
    {
        $selectedRules = $request->input('rules'); // Get selected rule IDs
        $admin = Auth::guard('admin')->user(); // Get the authenticated admin
        $admin->rules()->sync($selectedRules); // Save selected rules for the admin
        return redirect()->route('rules.permissions.index')->with('success', 'Rule/Permission created successfully.');
    }

    // Display the specified rule or permission
    public function show($id)
    {
        $rule = RulesAndPermissions::findOrFail($id); // Retrieve specific rule or permission
        return view('admin.pages.rules_permissions.show', compact('rule')); // Example view
    }

    // Show the form for editing the specified rule or permission
    public function edit($id)
    {
        $rule = RulesAndPermissions::findOrFail($id); // Retrieve specific rule or permission
        return view('admin.pages.rules_permissions.edit', compact('rule')); // Example view
    }

    // Update the specified rule or permission in storage
    public function update(Request $request, $id)
    {
        $rule = RulesAndPermissions::findOrFail($id); // Retrieve specific rule or permission
        $rule->update($request->all()); // Update rule or permission
        return redirect()->route('rules.permissions.index')->with('success', 'Rule/Permission updated successfully.');
    }

    // Remove the specified rule or permission from storage
    public function destroy($id)
    {
        $rule = RulesAndPermissions::findOrFail($id); // Retrieve specific rule or permission
        $rule->delete(); // Delete rule or permission
        return redirect()->route('rules.permissions.index')->with('success', 'Rule/Permission deleted successfully.');
    }
}
