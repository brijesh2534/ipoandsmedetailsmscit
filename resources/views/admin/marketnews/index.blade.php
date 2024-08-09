@extends('layouts.admin')

@section('content')
    <h2>Market News</h2>

    @if(session('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <a href="{{ route('marketnews.create') }}" class="w3-button w3-blue" style="margin-bottom: 10px;float:right">Insert</a>
    <table class="w3-table-all">
        <thead>
            <tr class="w3-orange">
                <th>Date</th>
                <th>Market News</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marketnews as $news)
                <tr>
                    <td>{{ $news->date->format('Y-m-d') }}</td>
                    <td>{{ $news->market_news }}</td>
                    <td>
                        <a href="{{ route('marketnews.edit', $news->id) }}" class="w3-button w3-blue">Update</a>
                        <form action="{{ route('marketnews.destroy', $news->id) }}" method="POST" style="display:inline;">
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
