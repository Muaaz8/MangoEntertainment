<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Parse\ParseException;
use Parse\ParseUser;
use Parse\ParseQuery;

class ProfileController extends Controller
{
    public function my_profile(){
        $user = session()->get('user');
        // dd();
        $query = new ParseQuery("_User");
        try {
            $results = $query->get($user['id']);
        } catch (ParseException $ex) {
        }
        return view('profile.view', compact('results'));
    }
}
