@extends('layouts.admin')

@section('content')
    <h2>Add New Subscription</h2>

    <form action="{{ route('subscriptions.store') }}" method="POST" class="w3-container w3-card-4 w3-light-grey w3-margin">
        @csrf

        <div class="w3-margin-bottom">
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" class="w3-input" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="qib">QIB:</label>
            <input type="number" id="qib" name="qib" class="w3-input">
        </div>

        <div class="w3-margin-bottom">
            <label for="nii">NII:</label>
            <input type="number" id="nii" name="nii" class="w3-input">
        </div>

        <div class="w3-margin-bottom">
            <label for="retailers">Retailers:</label>
            <input type="number" id="retailers" name="retailers" class="w3-input">
        </div>

        <div class="w3-margin-bottom">
            <label for="total">Total:</label>
            <input type="number" id="total" name="total" class="w3-input">
        </div>

        <button type="submit" class="w3-button w3-green">Submit</button>
    </form>
@endsection
