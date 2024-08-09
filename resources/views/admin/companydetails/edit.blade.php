@extends('layouts.admin')

@section('content')
    <h2>Edit Company Detail</h2>

    <form action="{{ route('companydetails.update', $companydetail->id) }}" method="POST" class="w3-container w3-card-4 w3-light-grey w3-margin">
        @csrf
        @method('PUT')

        <div class="w3-margin-bottom">
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" class="w3-input" value="{{ $companydetail->company_name }}" required>
        </div>

        <div class="w3-margin-bottom">
            <label for="company_details">Company Details:</label>
            <textarea id="company_details" name="company_details" class="w3-input" required>{{ $companydetail->company_details }}</textarea>
        </div>

        <button type="submit" class="w3-button w3-green">Update</button>
    </form>
@endsection
