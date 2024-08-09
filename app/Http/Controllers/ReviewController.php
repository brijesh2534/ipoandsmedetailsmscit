<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    public function index()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $reviews = Review::all();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'company_name' => 'required|string|max:255',
            'reviews' => 'required|string',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review added successfully.');
    }

    public function edit($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $review = Review::findOrFail($id);
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'company_name' => 'required|string|max:255',
            'reviews' => 'required|string',
        ]);

        $review = Review::findOrFail($id);
        $review->update($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy($id)
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}
