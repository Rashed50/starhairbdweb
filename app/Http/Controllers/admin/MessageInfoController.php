<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MessageInfo;
use Illuminate\Http\Request;

class MessageInfoController extends Controller
{
    public function getAllMessage(){
        return $allMessage = MessageInfo::orderBy('message_id', 'DESC')->get();
    }



    public function index(){
        $messages = $this->getAllMessage();

        return view('admin.customer.message.index', compact('messages'));
    }
}
