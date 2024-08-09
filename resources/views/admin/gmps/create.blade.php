@extends('layouts.admin')

@section('content')
    <h2>Add New GMP</h2>

    <form action="{{ route('gmps.store') }}" method="POST" class="w3-container w3-card-4 w3-light-grey w3-margin">
        @csrf <!-- CSRF Token -->

        <div class="w3-margin-bottom">
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" class="w3-input" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="gmp">GMP (₹):</label>
            <input type="number" step="0.01" id="gmp" name="gmp" class="w3-input" required>
        </div>

        <button type="submit" class="w3-button w3-green">Submit</button>
    </form>
@endsection
