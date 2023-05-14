<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class NewsEventDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = Event::paginate(6, ['*'], 'page', $request->query('page', 1));
        return view('dashboard.event', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.eventCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'excerpt' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $validatedData['image']->store('/event-images');

        $event = new Event;
        $event->title = $validatedData['title'];
        $event->content = $validatedData['content'];
        $event->excerpt = $validatedData['excerpt'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/event-images'), $imageName);
            $event->image = '/event-images/' . $imageName;
        }
        $event->save();

        return redirect('/dashboard/news-event')->with('success', 'Event created successfully!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // TODO: need to integrate with FE (overlay component), change the view with the edit
        $event = Event::find($id);
        return view('dashboard.eventUpdate', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $event = Event::find($id);
        $event->title = $validatedData['title'];
        $event->content = $validatedData['content'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/event-images'), $imageName);
            $event->image = '/event-images/' . $imageName;
        }
        $event->save();

        return redirect('/dashboard/news-event')->with('Success', 'Successfully updated!');
        dd();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect('/dashboard/news-event')->with('Success', 'Successfully deleted!');
    }
}
