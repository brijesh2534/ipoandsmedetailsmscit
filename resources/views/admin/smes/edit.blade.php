@extends('layouts.admin')

@section('content')
    <h2>Edit SME</h2>

    <form action="{{ route('smes.update', $sme->id) }}" method="POST" class="w3-container w3-card-4 w3-light-grey w3-margin">
        @csrf <!-- CSRF Token -->
        @method('PUT') <!-- PUT Method -->

        <div class="w3-margin-bottom">
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" class="w3-input" value="{{ $sme->company_name }}" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="gmp">Gmp:</label>
            <input type="text" id="gmp" name="gmp" class="w3-input" value="{{ $sme->gmp }}" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="open_date">Open Date:</label>
            <input type="date" id="open_date" name="open_date" class="w3-input" value="{{ $sme->open_date }}" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="close_date">Close Date:</label>
            <input type="date" id="close_date" name="close_date" class="w3-input" value="{{ $sme->close_date }}" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="allotment_date">Allotment Date:</label>
            <input type="date" id="allotment_date" name="allotment_date" class="w3-input" value="{{ $sme->allotment_date }}" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="listing_date">Listing Date:</label>
            <input type="date" id="listing_date" name="listing_date" class="w3-input" value="{{ $sme->listing_date }}" required>
        </div>

        <button type="submit" class="w3-button w3-green">Update</button>
    </form>
@endsection
