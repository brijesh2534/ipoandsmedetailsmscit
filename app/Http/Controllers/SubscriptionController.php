<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{
    public function index()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $subscriptions = Subscription::all();
        return view('admin.subscriptions.index', compact('subscriptions'));
    }

    public function create()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        return view('admin.subscriptions.create');
    }

    public function store(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'company_name' => 'required|string|max:255',
            'qib' => 'nullable|integer',
            'nii' => 'nullable|integer',
            'retailers' => 'nullable|integer',
            'total' => 'nullable|integer',
        ]);

        Subscription::create($request->all());

        return redirect()->route('subscriptions.index')->with('success', 'Subscription data added successfully.');
    }

    public function edit($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $subscription = Subscription::findOrFail($id);
        return view('admin.subscriptions.edit', compact('subscription'));
    }

    public function update(Request $request, $id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'company_name' => 'required|string|max:255',
            'qib' => 'nullable|integer',
            'nii' => 'nullable|integer',
            'retailers' => 'nullable|integer',
            'total' => 'nullable|integer',
        ]);

        $subscription = Subscription::findOrFail($id);
        $subscription->update($request->all());

        return redirect()->route('subscriptions.index')->with('success', 'Subscription data updated successfully.');
    }

    public function destroy($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $subscription = Subscription::findOrFail($id);
        $subscription->delete();

        return redirect()->route('subscriptions.index')->with('success', 'Subscription deleted successfully.');
    }
}

