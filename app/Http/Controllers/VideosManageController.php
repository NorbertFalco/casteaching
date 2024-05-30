<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Tests\Feature\Videos\VideosManageControllerTest;

class VideosManageController extends Controller
{


    public static function testedBy()
    {
        return VideosManageControllerTest::class;
    }

    public function index()
    {
        return view('videos.manage.index',[
            'videos' => Video::all()
        ]);
    }

    /** C -> Create -> Mostrarà el formulari de creació */
    public function create()
    {
        //
    }

    /** C -> Create -> Guardarà a base de dades el nou Video */
    public function store(Request $request)
    {
        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
        ]);

        session()->flash('status', 'Video created successfully');

        return redirect()->route('manage.videos');

    }

    /** R -> NO LLISTA -> Individual -> */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return view('videos.manage.edit', ['video' => Video::findOrFail($id) ]);
    }

    /** U -> update -> Processarà el Form i guardarà les modificacions */
    public function update(Request $request, string $id)
    {
        $video = Video::findOrFail($id);
        $video->title = $request->title;
        $video->description = $request->description;
        $video->url = $request->url;
        $video->save();

        session()->flash('status', 'Video updated successfully');
        return redirect()->route('manage.videos');
    }

    /** D -> DELETE */
    public function destroy(string $id)
    {
        Video::find($id)->delete();
        session()->flash('status', 'Video deleted successfully');
        return redirect()->route('manage.videos');
    }
}
