  @include('header')
    <div class="container">
        <h1>Organizers</h1>
        <a href="{{ route('organizers.create') }}" class="btn btn-primary mb-3">Add Organizer</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <table id="organizers-table" class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Facebook Link</th>
                    <th>X Link</th>
                    <th>Website Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($organizers as $organizer)
                    <tr>
                        <td>{{ $organizer->name }}</td>
                        <td>{{ $organizer->description }}</td>
                        <td>{{ $organizer->facebook_link }}</td>
                        <td>{{ $organizer->x_link }}</td>
                        <td>{{ $organizer->website_link }}</td>
                        <td>
                            <a href="{{ route('organizers.edit', $organizer->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('organizers.destroy', $organizer->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('organizers.show', $organizer->id) }}" class="btn btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#organizers-table').DataTable();
        });
    </script>
