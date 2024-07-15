<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use ZEGO\ZegoServerAssistant;
use ZEGO\ZegoAssistantToken;
use ZEGO\ZegoErrorCodes;
use Parse\ParseException;
use Parse\ParseUser;
use Parse\ParseQuery;

class LiveStreamController extends Controller
{
    public function stream()
    {
        $user = session()->get('user');

        if($user){
            $user_id = $user['id'];
            $user_name = $user['name'];
            $room_id = uniqid();
            return view('Video.index',compact('user_id','user_name','room_id'));
            // return view('streaming.check',compact('user_id','user_name','room_id'));
        }else{
            return redirect()->back();
        }
    }

    public function joinStream($roomId){
        $user = session()->get('user');

        if($user){
            $appId = 2023938396;
            $userId = $user['id'];
            $secret = 'e428369662d80362cc2e0a15ba6e5cf9';
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
            $room_id = $roomId;
            return view('Video.viewStream',compact('appId','user_id','user_name','room_id','assistantToken'));
        }else{
            return redirect()->back();
        }
    }

    public function stream_list(){
        $users = new ParseQuery("_User");
        $users->includeKey('*');
        try {
            $users = $users->limit(12)->find();
        } catch (ParseException $ex) {
            dd('catch',$users);
        }
        $user = session()->get('user');
        $userquery = new ParseQuery("_User");
        $user = $userquery->get($user['id']);

        $query = new ParseQuery("Streaming");
        $query->includeKey('*');
        try {
            $results = $query->equalTo("streaming",true)->find();
        } catch (ParseException $ex) {
            dd('catch',$results);
        }

        return view('streamList',compact('results','users','user'));
    }
}
