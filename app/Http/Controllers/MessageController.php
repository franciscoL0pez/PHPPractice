<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all(); // Trae todos los mensajes de la base de datos
        return view('messages.index', compact('messages'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        Message::create([
            'text' => $request->text,
        ]);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $message = Message::findOrFail($id);
        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        $message = Message::findOrFail($id);
        $message->update([
            'text' => $request->text,
        ]);

        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->back();

    }
}
