@extends('layouts.admin')

@section('content')
    <h2>Mainboard SME Data</h2>

    @if(session('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <a href="{{ route('smes.create') }}" class="w3-button w3-blue" style="margin-bottom: 10px;float:right">Insert</a>
    <table class="w3-table-all">
        <thead>
            <tr class="w3-orange">
                <th>Company Name</th>
                <th>Gmp</th>
                <th>Open Date</th>
                <th>Close Date</th>
                <th>Allotment Date</th>
                <th>Listing Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($smes as $sme)
                <tr>
                    <td>{{ $sme->company_name }}</td>
                    <td>{{ $sme->gmp }}</td>
                    <td>{{ $sme->open_date }}</td>
                    <td>{{ $sme->close_date }}</td>
                    <td>{{ $sme->allotment_date }}</td>
                    <td>{{ $sme->listing_date }}</td>
                    <td>
                        <a href="{{ route('smes.edit', $sme->id) }}" class="w3-button w3-blue">Update</a>
                        <form action="{{ route('smes.destroy', $sme->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w3-button w3-red">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif
@endsection
