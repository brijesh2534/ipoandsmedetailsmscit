@extends('layouts.admin')

@section('content')
    <h2>Edit GMP</h2>

    <form action="{{ route('gmps.update', $gmp->id) }}" method="POST" class="w3-container w3-card-4 w3-light-grey w3-margin">
        @csrf <!-- CSRF Token -->
        @method('PUT') <!-- PUT Method -->

        <div class="w3-margin-bottom">
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" class="w3-input" value="{{ $gmp->company_name }}" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="gmp">Gmp:</label>
            <input type="text" id="gmp" name="gmp" class="w3-input" value="{{ $gmp->gmp }}" required>
        </div>

        <button type="submit" class="w3-button w3-green">Update</button>
    </form>
@endsection
