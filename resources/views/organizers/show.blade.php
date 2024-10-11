  @include('header')
    <div class="container">
        <h1>Organizer Details</h1>
        <div class="mb-3">
            <label class="form-label"><strong>Name:</strong></label>
            <p class="form-control-plaintext">{{ $organizer->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Description:</strong></label>
            <p class="form-control-plaintext">{{ $organizer->description }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Facebook Link:</strong></label>
            <p class="form-control-plaintext">{{ $organizer->facebook_link }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>X Link:</strong></label>
            <p class="form-control-plaintext">{{ $organizer->x_link }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Website Link:</strong></label>
            <p class="form-control-plaintext">{{ $organizer->website_link }}</p>
        </div>
        <a href="{{ route('organizers.index') }}" class="btn btn-secondary">Back</a>
    </div>
