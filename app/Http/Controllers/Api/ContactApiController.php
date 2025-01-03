<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Gate;
use Illuminate\Http\Request;

class ContactApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        if(Gate::denies('admin')){
            return response()->json([
                'message' => 'You are not authorized to access this page'
            ], 403);
        }
        
        $message = Message::all();
        return response()->json($message, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $message = new Message;
        $message->name = request()->name;
        $message->email= request()->email;
        $message->message  = request()->message;
        $message->save();

        return $message;
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
