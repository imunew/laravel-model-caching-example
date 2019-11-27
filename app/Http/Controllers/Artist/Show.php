<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArtistResource;
use App\Models\Artist;
use Illuminate\Http\Request;

class Show extends Controller
{
    /**
     * @param Request $request
     * @param Artist $artist
     * @return ArtistResource
     */
    public function __invoke(Request $request, Artist $artist)
    {
        return new ArtistResource(
            (new Artist)->with(['albums'])->findOrFail($artist->ArtistId)
        );
    }
}
