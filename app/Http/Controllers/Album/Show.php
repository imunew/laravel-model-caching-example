<?php

namespace App\Http\Controllers\Album;

use App\Http\Controllers\Controller;
use App\Http\Resources\AlbumResource;
use App\Models\Album;
use Illuminate\Http\Request;

class Show extends Controller
{
    /**
     * @param Request $request
     * @param Album $album
     * @return AlbumResource
     */
    public function __invoke(Request $request, Album $album)
    {
        return new AlbumResource(
            (new Album)->with(['artist'])->findOrFail($album->AlbumId)
        );
    }
}
