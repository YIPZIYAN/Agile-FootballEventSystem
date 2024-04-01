<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

use function Ramsey\Uuid\v1;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('events_creation.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events_creation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $validatedData = $request->validated();

        $event = Event::create($validatedData);

        if ($event) {
            toastr()->success("Football Event Created Successfully");
        } else {
            toastr()->error("Failed to create Football Event");
        }

        return Redirect::route('event.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events_creation.edit', [
            'event' => $event,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $validatedData = $request->validated();

        $event->update($validatedData);

        if ($event->wasChanged()) {
            toastr()->success("Football Event Updated Successfully");
        } else {
            toastr()->info("No changes were made to the Football Event");
        }

        return Redirect::route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {

    }
}
