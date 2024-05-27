<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use ZEGO\ZegoServerAssistant;
use ZEGO\ZegoAssistantToken;
use ZEGO\ZegoErrorCodes;

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

    public function joinStream(){
        $user = session()->get('user');

        if($user){
            $appId = 1101904631;
            $userId = $user['id'];
            $secret = '3131e55d1d7505c2655a85258bce52df';
            $effectiveTimeInSeconds = 3600;
            $payload = "";

            $assistantToken = ZegoServerAssistant::generateToken04(
                $appId,
                $userId,
                $secret,
                $effectiveTimeInSeconds,
                $payload
            );
            $user_id = $user['id'];
            $user_name = $user['name'];
            $room_id = "6644de0a19595";
            return view('video.viewStream',compact('user_id','user_name','room_id','assistantToken'));
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
