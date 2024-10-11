  @include('header')
    <div class="container">
        <h1>Event Details</h1>
        <div class="mb-3">
            <label class="form-label"><strong>Title:</strong></label>
            <p class="form-control-plaintext">{{ $event->title }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Venue:</strong></label>
            <p class="form-control-plaintext">{{ $event->venue }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Date:</strong></label>
            <p class="form-control-plaintext">{{ $event->date }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Start Time:</strong></label>
            <p class="form-control-plaintext">{{ $event->start_time }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Description:</strong></label>
            <p class="form-control-plaintext">{{ $event->description }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Tags:</strong></label>
            <p class="form-control-plaintext">{{ $event->tags }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Booking URL:</strong></label>
            <p class="form-control-plaintext">{{ $event->booking_url }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Event Category:</strong></label>
            <p class="form-control-plaintext">{{ $event->event_category->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Organizer:</strong></label>
            <p class="form-control-plaintext">{{ $event->organizer->name }}</p>
        </div>
        <a href="{{ route('events.index') }}" class="btn btn-secondary">Back</a>
    </div>
