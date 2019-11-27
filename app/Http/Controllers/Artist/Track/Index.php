<?php

namespace App\Http\Controllers\Artist\Track;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArtistTracksResource;
use App\Models\Artist;
use Illuminate\Http\Request;

class Index extends Controller
{
    /**
     * @param Request $request
     * @param Artist $artist
     * @return ArtistTracksResource
     */
    public function __invoke(Request $request, Artist $artist)
    {
        return new ArtistTracksResource($artist);
    }
}
