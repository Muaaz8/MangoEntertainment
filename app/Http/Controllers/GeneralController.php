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


    public function users(Request $request){
        $perPage = 10;
        $page = $request->get('page', 1);
        $skip = ($page - 1) * $perPage;

        $usersQuery = new ParseQuery("_User");
        $usersQuery->includeKey('*');
        $usersQuery->limit($perPage);
        $usersQuery->skip($skip);
        $users = $usersQuery->find();
        $total = $usersQuery->count();
        $paginator = new LengthAwarePaginator(
            $users,
            $total,
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );
        return view('dashboard_details.users',compact('paginator'));
    }

    public function music(Request $request){
        $perPage = 10;
        $page = $request->get('page', 1);
        $skip = ($page - 1) * $perPage;

        $musicQuery = new ParseQuery("AudioFile");
        $musicQuery->includeKey('*');
        $musicQuery->limit($perPage);
        $musicQuery->skip($skip);
        $music = $musicQuery->find();
        $total = $musicQuery->count();
        $paginator = new LengthAwarePaginator(
            $music,
            $total,
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );
        return view('dashboard_details.music',compact('paginator'));
    }

    public function dash_store(Request $request){
        $perPage = 10;
        $page = $request->get('page', 1);
        $skip = ($page - 1) * $perPage;

        $musicQuery = new ParseQuery("Store");
        $musicQuery->includeKey('author');
        $musicQuery->limit($perPage);
        $musicQuery->skip($skip);
        $music = $musicQuery->find();
        $total = $musicQuery->count();
        $paginator = new LengthAwarePaginator(
            $music,
            $total,
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );
        return view('dashboard_details.store',compact('paginator'));
    }

    public function gifts(Request $request){
        $perPage = 10;
        $page = $request->get('page', 1);
        $skip = ($page - 1) * $perPage;

        $giftsQuery = new ParseQuery("Gifts");
        $giftsQuery->includeKey('*');
        $giftsQuery->limit($perPage);
        $giftsQuery->skip($skip);
        $gifts = $giftsQuery->find();
        $total = $giftsQuery->count();
        $paginator = new LengthAwarePaginator(
            $gifts,
            $total,
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );
        return view('dashboard_details.gifts',compact('paginator'));
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

    public function insert_gifts(Request $request){
        $image = $request->file('image');
        $request->validate([
            'name' => 'required|string|max:255',
            'coins' => 'required',
            'category' => 'required|string|max:255',
            'file' => 'required',
            'music' => 'required',
            'image' => 'required',
        ]);

        $file = $request->file('file');
        $svgaFile = ParseFile::createFromFile($file->getPathname(), $file->getClientOriginalName(), $file->getClientOriginalExtension());
        $svgaFile->save();

        $image = $request->file('image');
        $imageFile = ParseFile::createFromFile($image->getPathname(), $image->getClientOriginalName(), $image->getClientOriginalExtension());
        $imageFile->save();

        $music = $request->file('music');
        $musicFile = ParseFile::createFromFile($music->getPathname(), $music->getClientOriginalName(), $music->getClientOriginalExtension());
        $musicFile->save();

        $gift = new ParseObject("Gifts");
        $gift->set("name", $request->name);
        $gift->set("coins", (float)$request->coins);
        $gift->set("categories", $request->category);
        $gift->set("file", $svgaFile);
        $gift->set("music", $musicFile);
        $gift->set("image", $imageFile);

        $gift->save();
        return redirect()->route('gifts');

    }

    public function insert_music(Request $request){
        $request->validate([
            'audioName' => 'required|string|max:255',
            'singerName' => 'required',
            'music' => 'required',
            'image' => 'required',
        ]);

        $file = $request->file('image');
        $thumbnailImage = ParseFile::createFromFile($file->getPathname(), $file->getClientOriginalName(), $file->getClientOriginalExtension());
        $thumbnailImage->save();

        $music = $request->file('music');
        $musicFile = ParseFile::createFromFile($music->getPathname(), $music->getClientOriginalName(), $music->getClientOriginalExtension());
        $musicFile->save();

        $audio = new ParseObject("AudioFile");
        $audio->set("audioName", $request->audioName);
        $audio->set("singerName", $request->singerName);
        $audio->set("audioURL", $musicFile);
        $audio->set("thumbnailURL", $thumbnailImage);

        $audio->save();
        return redirect()->route('music');

    }

    public function delete_hashtag($id){
        $hashtagQuery = new ParseQuery("Hashtags");
        $hashtag = $hashtagQuery->get($id);
        $hashtag->destroy();
        return redirect()->route('hashtags');
    }

    public function delete_gift($id){
        $hashtagQuery = new ParseQuery("Gifts");
        $hashtag = $hashtagQuery->get($id);
        $hashtag->destroy();
        return redirect()->route('gifts');
    }

    public function delete_music($id){
        $hashtagQuery = new ParseQuery("AudioFile");
        $hashtag = $hashtagQuery->get($id);
        $hashtag->destroy();
        return redirect()->route('music');
    }

    public function edit_hashtag($id) {
        $hashtagsQuery = new ParseQuery("Hashtags");
        $hashtagsQuery->includeKey('*');
        $hashtags = $hashtagsQuery->equalTo('objectId',$id)->find();
        return view('dashboard_details.edit_hashtags', compact('hashtags'));
    }

    public function update_hashtag(Request $request){
        $request->validate([
            'hashtags' => 'required|string|max:255',
        ]);

        $input_hashtag = $request->hashtags;
        $hashtagsQuery = new ParseQuery("Hashtags");
        $hashtagsQuery->includeKey('*');
        $hashtags = $hashtagsQuery->equalTo('objectId',$request->objectId)->find();
        $hashtags[0]->set("hashtag", $request->hashtags);
        $hashtags[0]->save();
        return redirect()->route('hashtags');
    }
}
