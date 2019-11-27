<?php

namespace App\Http\Controllers\Album;

use App\Http\Controllers\Controller;
use App\Http\Resources\AlbumResource;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class Index extends Controller
{
    /**
     * @param Request $request
     * @return AlbumResource[]|AnonymousResourceCollection
     */
    public function __invoke(Request $request)
    {
        return AlbumResource::collection(
            (new Album)->disableModelCaching()->get()
        );
    }
}
