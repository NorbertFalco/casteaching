<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideosController extends Controller
{

    public static function testedBy()
    {
        return VideoTest::class;
    }

    public function show($id)
    {
        return view('videos.show',[
            'video' => Video::findOrFail($id)
        ]);
    }
}
