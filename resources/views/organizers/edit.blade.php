  @include('header')
<div class="container">
        <h1>Edit Organizer</h1>
        <form action="{{ route('organizers.update', $organizer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $organizer->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required>{{ $organizer->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="facebook_link">Facebook Link</label>
                <input type="text" name="facebook_link" class="form-control" value="{{ $organizer->facebook_link }}" required>
            </div>
            <div class="form-group">
                <label for="x_link">X Link</label>
                <input type="text" name="x_link" class="form-control" value="{{ $organizer->x_link }}" required>
            </div>
            <div class="form-group">
                <label for="website_link">Website Link</label>
                <input type="text" name="website_link" class="form-control" value="{{ $organizer->website_link }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>