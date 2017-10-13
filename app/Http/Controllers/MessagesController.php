<?php

namespace App\Http\Controllers;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Message;

class MessagesController extends Controller
{
    public function index(Request $request)
    {
        $messages= Message::all();
        $count = $messages->count();
        $date = Carbon::now();
        return view('admin.messages.index')->with('messages',$messages)->with('messagescount', $count);
    }

    public function create()
    {
        return view('admin.messages.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $message = Message::find($id);
        $message->status='leido';
        return view('admin.messages.show')->with('message', $message);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
