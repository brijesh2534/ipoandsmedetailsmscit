@extends('layouts.admin')

@section('content')
    <h2>Update IPO</h2>
    <form action="{{ route('ipos.update', $ipo->id) }}" method="POST" class="w3-container w3-card-4 w3-light-grey w3-margin">
        @csrf
        @method('PUT')
        <p>
            <label>Company Name</label>
            <input class="w3-input" type="text" name="company_name" value="{{ $ipo->company_name }}" required>
        </p>
        <p>
            <label>Gmp</label>
            <input class="w3-input" type="number" name="gmp" value="{{ $ipo->gmp }}" required>
        </p>
        <p>
            <label>Open Date</label>
            <input class="w3-input" type="date" name="open_date" value="{{ $ipo->open_date }}" required>
        </p>
        <p>
            <label>Close Date</label>
            <input class="w3-input" type="date" name="close_date" value="{{ $ipo->close_date }}" required>
        </p>
        <p>
            <label>Allotment Date</label>
            <input class="w3-input" type="date" name="allotment_date" value="{{ $ipo->allotment_date }}" required>
        </p>
        <p>
            <label>Listing Date</label>
            <input class="w3-input" type="date" name="listing_date" value="{{ $ipo->listing_date }}" required>
        </p>
        <p>
            <button class="w3-button w3-blue" type="submit">Submit</button>
        </p>
    </form>
@endsection
