<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseFile;
use Illuminate\Pagination\LengthAwarePaginator;

class GeneralController extends Controller
{
    public function dashboard(){
        return view('dashboard_details.dashboard');
    }

    public function hashtags(Request $request) {
        $perPage = 10;
        $page = $request->get('page', 1);
        $skip = ($page - 1) * $perPage;

        $hashtagsQuery = new ParseQuery("Hashtags");
        $hashtagsQuery->includeKey('*');
        $hashtagsQuery->limit($perPage);
        $hashtagsQuery->skip($skip);
        $hashtags = $hashtagsQuery->find();
        $total = $hashtagsQuery->count();
        $paginator = new LengthAwarePaginator(
            $hashtags,
            $total,
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );
        return view('dashboard_details.hashtags', compact('paginator'));
    }


    public function users(){
        return view('dashboard_details.users');
    }

    public function gifts(){
        return view('dashboard_details.gifts');
    }

    public function insert_hashtags(Request $request){
        $request->validate([
            'hashtags' => 'required|string|max:255',
        ]);

        $hashtags = $request->hashtags;
        foreach (explode(',',$hashtags) as $key => $value) {
            $ht = new ParseObject("Hashtags");
            $ht->set("hashtag", $value);
            $ht->save();

        }
        return redirect()->route('hashtags');
    }

    public function delete_hashtag($id){
        $hashtagQuery = new ParseQuery("Hashtags");
        $hashtag = $hashtagQuery->get($id);
        $hashtag->destroy();
        return redirect()->route('hashtags');
    }

    public function edit_hashtag($id) {
        $hashtagsQuery = new ParseQuery("Hashtags");
        $hashtagsQuery->includeKey('*');
        $hashtags = $hashtagsQuery->equalTo('objectId',$id)->find();
        return view('dashboard_details.edit_hashtags', compact('hashtags'));
    }
}
