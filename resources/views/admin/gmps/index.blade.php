@extends('layouts.admin')

@section('content')
    <h2>GMP Data</h2>

    @if(session('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <a href="{{ route('gmps.create') }}" class="w3-button w3-blue" style="margin-bottom: 10px;float:right">Insert</a>
    <table class="w3-table-all">
        <thead>
            <tr class="w3-orange">
                <th>Company Name</th>
                <th>GMP (₹)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gmps as $gmp)
                <tr>
                    <td>{{ $gmp->company_name }}</td>
                    <td>{{ $gmp->gmp }}</td>
                    <td>
                        <a href="{{ route('gmps.edit', $gmp->id) }}" class="w3-button w3-blue">Update</a>
                        <form action="{{ route('gmps.destroy', $gmp->id) }}" method="POST" style="display:inline;">
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
