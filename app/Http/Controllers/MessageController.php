<?php

namespace App\Http\Controllers;

use App\Models\Craftsman;
use App\Models\Mesage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        $id= auth('craftsman')->id();
        $messages = Mesage::whereSenderId($id)->get();
        return view('chat.sent_message',compact('messages'));
    }
    public function inbox()
    {
        $id= auth('craftsman')->id();
        $messages = Mesage::whereReceiverId($id)->get();
        return view('chat.inbox',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    public function createMessage(Request $request)
    {
        $receiver_id = $request->id;
        $receiver = Craftsman::findOrFail($receiver_id);
        return view('chat.create', compact('receiver'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|min:1|max:255',
            'sender_id' => 'required',
            "receiver_id" => "required",
        ]);
        $message = new Mesage();
        $message->fill($request->only($message->getFillable()))->save();
        return redirect()->route('message.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Mesage $mesage
     * @return \Illuminate\Http\Response
     */
    public function show(Mesage $mesage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Mesage $mesage
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesage $mesage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Mesage $mesage
     * @return \Illuminate\Http\Response
     */
    public function update(MessagesRequest $request, Mesage $mesage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Mesage $mesage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesage $mesage)
    {
        //
    }
}