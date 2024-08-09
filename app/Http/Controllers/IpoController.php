<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ipo;

class IpoController extends Controller
{
    public function index()
    {
        $ipos = Ipo::all();
        return view('admin.ipos.index', compact('ipos'));
    }

    public function create()
    {
        return view('admin.ipos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'gmp' => 'required',
            'open_date' => 'required|date',
            'close_date' => 'required|date',
            'allotment_date' => 'required|date',
            'listing_date' => 'required|date',
        ]);

        Ipo::create($request->all());

        return redirect()->route('ipos.index')->with('success', 'IPO data added successfully.');
    }

    public function edit(Ipo $ipo)
    {
        return view('admin.ipos.edit', compact('ipo'));
    }

    public function update(Request $request, Ipo $ipo)
    {
        $request->validate([
            'company_name' => 'required',
            'gmp' => 'required',
            'open_date' => 'required|date',
            'close_date' => 'required|date',
            'allotment_date' => 'required|date',
            'listing_date' => 'required|date',
        ]);

        $ipo->update($request->all());

        return redirect()->route('ipos.index')->with('success', 'IPO data updated successfully.');
    }

    public function destroy(Ipo $ipo)
    {
        $ipo->delete();
        return redirect()->route('ipos.index')->with('success', 'IPO data deleted successfully.');
    }
}
