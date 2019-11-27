<?php

namespace App\Http\Controllers\Album\Track;

use App\Http\Controllers\Controller;
use App\Http\Resources\AlbumTracksResource;
use App\Models\Album;
use Illuminate\Http\Request;

class Index extends Controller
{
    /**
     * @param Request $request
     * @param Album $album
     * @return AlbumTracksResource
     */
    public function __invoke(Request $request, Album $album)
    {
        return new AlbumTracksResource($album);
    }
}
