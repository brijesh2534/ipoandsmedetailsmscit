<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarketNews;
use Illuminate\Support\Facades\Session;

class MarketNewsController extends Controller
{
    public function index()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $marketnews = MarketNews::all();
        return view('admin.marketnews.index', compact('marketnews'));
    }

    public function create()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        return view('admin.marketnews.create');
    }

    public function store(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'date' => 'required|date',
            'market_news' => 'required|string',
        ]);

        MarketNews::create($request->all());

        return redirect()->route('marketnews.index')->with('success', 'Market news added successfully.');
    }

    public function edit($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $marketnews = MarketNews::findOrFail($id);
        return view('admin.marketnews.edit', compact('marketnews'));
    }

    public function update(Request $request, $id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'date' => 'required|date',
            'market_news' => 'required|string',
        ]);

        $marketnews = MarketNews::findOrFail($id);
        $marketnews->update($request->all());

        return redirect()->route('marketnews.index')->with('success', 'Market news updated successfully.');
    }

    public function destroy($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $marketnews = MarketNews::findOrFail($id);
        $marketnews->delete();

        return redirect()->route('marketnews.index')->with('success', 'Market news deleted successfully.');
    }
}
