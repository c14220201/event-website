<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Models\Organizer;
class EventController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $eventCategories = EventCategory::all();
        $organizers = Organizer::all();
        return view('events.create', compact('eventCategories', 'organizers'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'venue' => 'required',
            'date' => 'required|date',
            'start_time' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'event_category_id' => 'required|exists:event_categories,id',
            'organizer_id' => 'required|exists:organizers,id',
        ]);
        //dd($request->all());
        Event::create($request->all());

        return redirect()->route('events.index')
                         ->with('success', 'Event created successfully.');
    }

    // Display the specified resource.
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    // Show the form for editing the specified resource.
    public function edit(Event $event)
    {
        
        $eventCategories = EventCategory::all();
        $organizers = Organizer::all();
        return view('events.edit', compact('event', 'eventCategories', 'organizers'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'venue' => 'required',
            'date' => 'required|date',
            'start_time' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'event_category_id' => 'required|exists:event_categories,id',
            'organizer_id' => 'required|exists:organizers,id',
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')
                         ->with('success', 'Event updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')
                         ->with('success', 'Event deleted successfully.');
    }
}