  @include('header')
    <div class="container">
        <h1>Add Organizer</h1>
        <form action="{{ route('organizers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="facebook_link">Facebook Link</label>
                <input type="text" name="facebook_link" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="x_link">X Link</label>
                <input type="text" name="x_link" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="website_link">Website Link</label>
                <input type="text" name="website_link" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
