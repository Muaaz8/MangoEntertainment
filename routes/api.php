<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Parse\ParseUser;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseFile;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('upload-gift', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'file' => 'required|file',
        'music' => 'required|file',
        'image' => 'required|file',
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

    dd('done');
});
