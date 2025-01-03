<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Message;

class AdminController extends Controller
{
    public function index()
    {
        if (Gate::denies('admin')) {
            abort('403', 'You are not authorized to access this page');
        }

        $messages = Message::all();
        return view('admin.messages', compact('messages'));
    }
}
