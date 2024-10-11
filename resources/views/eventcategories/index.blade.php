@include('header')
    <div class="container">
        <h1>Event Categories</h1>
        <a href="{{ route('eventcategories.create') }}" class="btn btn-primary mb-3">Add Event Category</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <table id="event-categories-table" class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventCategories as $eventCategory)
                    <tr>
                        <td>{{ $eventCategory->name }}</td>
                        <td>
                            <a href="{{ route('eventcategories.edit', $eventCategory->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('eventcategories.destroy', $eventCategory->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>


@section('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#event-categories-table').DataTable();
        });
    </script>
@endsection