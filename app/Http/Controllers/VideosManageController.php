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
        //
    }

    /** R -> NO LLISTA -> Individual -> */
    public function show(string $id)
    {
        //
    }

    /** U -> update -> Form */
    public function edit(string $id)
    {
        //
    }

    /** U -> update -> Processarà el Form i guardarà les modificacions */
    public function update(Request $request, string $id)
    {
        //
    }

    /** D -> DELETE */
    public function destroy(string $id)
    {
        //
    }
}
