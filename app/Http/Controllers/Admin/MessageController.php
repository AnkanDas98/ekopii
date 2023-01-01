<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function getAllMessages(){
        $messages =  Contact::all();
        return view('admin.messages.message_all', compact('messages'));
    }
}
