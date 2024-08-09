@extends('layouts.admin')

@section('content')
    <h2>Add New Review</h2>

    <form action="{{ route('reviews.store') }}" method="POST" class="w3-container w3-card-4 w3-light-grey w3-margin">
        @csrf

        <div class="w3-margin-bottom">
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" class="w3-input" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="reviews">Reviews:</label>
            <textarea id="reviews" name="reviews" class="w3-input" required></textarea>
        </div>

        <button type="submit" class="w3-button w3-green">Submit</button>
    </form>
@endsection
