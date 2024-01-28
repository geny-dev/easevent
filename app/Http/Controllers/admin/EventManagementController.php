<?php

namespace App\Http\Controllers\admin;

use App\DataTables\EventDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class EventManagementController extends Controller
{
    public function index(EventDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.env-management.event.list');
    }
    public function create(Request $request)
    {        
        $event = Event::create([
            'name' => $request->event_name,
        ]);
        return view('admin.pages.env-management.event.list', compact('event'));
    }

    public function show(Event $event)
    {
        return view('admin.pages.env-management.event.list', compact('event'));
    }


    public function destroy (Event $event){
        if (!$event) {
            return response()->json([
                'status_code' => 404,
                'type' => 'error',
                'message' => 'Sorry! Record not found.',
            ], 404);
        }

        // Delete the user
        $event->delete();

        return view('admin.pages.env-management.event.list', compact('event'));
    }

    public function edit(Event $event) {
        return view('admin.pages.env-management.event.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $user = Event::findOrFail($event->id);

        // Update the user's information
        $user->name = $request->event_name;
        $user->save();
        return redirect()->route('admin.env-management.event.index');
    }
}
