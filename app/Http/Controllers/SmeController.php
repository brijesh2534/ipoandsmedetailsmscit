<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sme;

class SmeController extends Controller
{
    public function index()
    {
        $smes = Sme::all();
        return view('admin.smes.index', compact('smes'));
    }

    public function create()
    {
        return view('admin.smes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'gmp' => 'required|string|max:255',
            'open_date' => 'required|date',
            'close_date' => 'required|date',
            'allotment_date' => 'required|date',
            'listing_date' => 'required|date',
        ]);

        Sme::create($request->all());

        return redirect()->route('smes.index')->with('success', 'SME data added successfully.');
    }

    public function edit($id)
    {
        $sme = Sme::findOrFail($id);
        return view('admin.smes.edit', compact('sme'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'gmp' => 'required|string|max:255',
            'open_date' => 'required|date',
            'close_date' => 'required|date',
            'allotment_date' => 'required|date',
            'listing_date' => 'required|date',
        ]);

        $sme = Sme::findOrFail($id);
        $sme->update($request->all());

        return redirect()->route('smes.index')->with('success', 'SME data updated successfully.');
    }

    public function destroy($id)
    {
        $sme = Sme::findOrFail($id);
        $sme->delete();

        return redirect()->route('smes.index')->with('success', 'SME data deleted successfully.');
    }
}
