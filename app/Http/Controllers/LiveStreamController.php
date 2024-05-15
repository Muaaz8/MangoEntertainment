<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LiveStreamController extends Controller
{
    public function stream()
    {
        $user = session()->get('user');

        if($user){
            $user_id = $user['id'];
            $user_name = $user['name'];
            $room_id = uniqid();
            return view('video.index',compact('user_id','user_name','room_id'));
            // return view('streaming.check',compact('user_id','user_name','room_id'));
        }else{
            return redirect()->back();
        }
    }

    public function join_stream($id)
    {
        $user = session()->get('user');
        if($user){
            $user_id = $user['id'];
            $user_name = $user['name'];
            $room_id = $id;
            return view('streaming.check',compact('user_id','user_name','room_id'));
        }else{
            return redirect()->back();
        }
    }
}
