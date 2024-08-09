@extends('layouts.admin')

@section('content')
    <h2>Add New Market News</h2>

    <form action="{{ route('marketnews.store') }}" method="POST" class="w3-container w3-card-4 w3-light-grey w3-margin">
        @csrf

        <div class="w3-margin-bottom">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" class="w3-input" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="market_news">Market News:</label>
            <textarea id="market_news" name="market_news" class="w3-input" required></textarea>
        </div>

        <button type="submit" class="w3-button w3-green">Submit</button>
    </form>
@endsection
