<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gmp;
use Illuminate\Support\Facades\Session;

class GmpController extends Controller
{
    public function index()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $gmps = Gmp::all();
        return view('admin.gmps.index', compact('gmps'));
    }

    public function create()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        return view('admin.gmps.create');
    }

    public function store(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'company_name' => 'required|string|max:255',
            'gmp' => 'required|string|max:255',
        ]);

        Gmp::create($request->all());

        return redirect()->route('gmps.index')->with('success', 'GMP data added successfully.');
    }

    public function edit($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $gmp = Gmp::findOrFail($id);
        return view('admin.gmps.edit', compact('gmp'));
    }

    public function update(Request $request, $id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'company_name' => 'required|string|max:255',
            'gmp' => 'required|string|max:255',
        ]);

        $gmp = Gmp::findOrFail($id);
        $gmp->update($request->all());

        return redirect()->route('gmps.index')->with('success', 'GMP data updated successfully.');
    }

    public function destroy($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $gmp = Gmp::findOrFail($id);
        $gmp->delete();

        return redirect()->route('gmps.index')->with('success', 'GMP data deleted successfully.');
    }
}
