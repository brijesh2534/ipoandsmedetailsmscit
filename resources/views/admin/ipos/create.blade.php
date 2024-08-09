@extends('layouts.admin')

@section('content')
    <h2>Insert New IPO</h2>
    <form action="{{ route('ipos.store') }}" method="POST" class="w3-container w3-card-4 w3-light-grey w3-margin">
        @csrf
        <p>
            <label>Company Name</label>
            <input class="w3-input" type="text" name="company_name" required>
        </p>
        <p>
            <label>Gmp</label>
            <input class="w3-input" type="number" name="gmp" required>
        </p>
        <p>
            <label>Open Date</label>
            <input class="w3-input" type="date" name="open_date" required>
        </p>
        <p>
            <label>Close Date</label>
            <input class="w3-input" type="date" name="close_date" required>
        </p>
        <p>
            <label>Allotment Date</label>
            <input class="w3-input" type="date" name="allotment_date" required>
        </p>
        <p>
            <label>Listing Date</label>
            <input class="w3-input" type="date" name="listing_date" required>
        </p>
        <p>
            <button class="w3-button w3-blue" type="submit">Submit</button>
        </p>
    </form>
@endsection
