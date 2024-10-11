<?php
namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $eventCategories = EventCategory::all();
        return view('eventcategories.index', compact('eventCategories'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('eventcategories.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        EventCategory::create($request->only('name'));

        return redirect()->route('eventcategories.index')
                         ->with('success', 'Event Category created successfully.');
    }

    // Show the form for editing the specified resource.
    public function edit(EventCategory $eventCategory)
    {
        return view('eventcategories.edit', compact('eventCategory'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, EventCategory $eventCategory)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $eventCategory->update($request->only('name'));

        return redirect()->route('eventcategories.index')
                         ->with('success', 'Event Category updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(EventCategory $eventCategory)
    {
        $eventCategory->delete();

        return redirect()->route('eventcategories.index')
                         ->with('success', 'Event Category deleted successfully.');
    }
}