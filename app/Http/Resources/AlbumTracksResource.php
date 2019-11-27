<?php

namespace App\Http\Resources;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class AlbumTracksResource
 * @package App\Http\Resources
 *
 * @property-read Album $resource
 */
class AlbumTracksResource extends JsonResource
{
    /** @var string|null */
    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'album' => [
                'id' => $this->resource->AlbumId,
                'title' => $this->resource->Title,
            ],
            'tracks' => TrackResource::collection($this->resource->tracks)
        ];
    }
}
