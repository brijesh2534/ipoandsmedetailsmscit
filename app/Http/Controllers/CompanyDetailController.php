<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use Illuminate\Support\Facades\Session;

class CompanyDetailController extends Controller
{
    public function index()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $companydetails = CompanyDetails::all();
        return view('admin.companydetails.index', compact('companydetails'));
    }

    public function create()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        return view('admin.companydetails.create');
    }

    public function store(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_details' => 'required|string',
        ]);

        CompanyDetails::create($request->all());

        return redirect()->route('companydetails.index')->with('success', 'Company details added successfully.');
    }

    public function edit($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }
    
        $companydetail = CompanyDetails::findOrFail($id);
        return view('admin.companydetails.edit', compact('companydetail'));
    }
    

    public function update(Request $request, $id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_details' => 'required|string',
        ]);

        $CompanyDetails = CompanyDetails::findOrFail($id);
        $CompanyDetails->update($request->all());

        return redirect()->route('companydetails.index')->with('success', 'Company details updated successfully.');
    }

    public function destroy($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $CompanyDetails = CompanyDetails::findOrFail($id);
        $CompanyDetails->delete();

        return redirect()->route('companydetails.index')->with('success', 'Company details deleted successfully.');
    }
}
