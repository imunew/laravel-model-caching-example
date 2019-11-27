<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArtistResource;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class Index extends Controller
{
    /**
     * @param Request $request
     * @return ArtistResource[]|AnonymousResourceCollection
     */
    public function __invoke(Request $request)
    {
        return ArtistResource::collection(
            (new Artist)->disableModelCaching()->with(['albums'])->get()
        );
    }
}
