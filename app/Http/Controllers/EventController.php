<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show(Event $event)
    {
        return $event;
    }

    public function showCreate()
    {
        return view('event.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'starts_at' => ['required'],
            'ends_at' => ['required']
        ]);

        $event = new Event;

        $event->price = $request->has('free') ? 0 : $request->get('price');
        $event->seats = $request->has('unlimited') ? null : $request->get('seats');
        $event->unlimited = $request->has('unlimited');
        $event->starts_at = Carbon::parse($request->get('starts_at'));
        $event->ends_at = Carbon::parse($request->get('ends_at'));

        $event->user()->associate(\Auth::user());

        $event->saveOrFail();
    }
}
