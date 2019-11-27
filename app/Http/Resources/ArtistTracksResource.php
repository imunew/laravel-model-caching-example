<?php

namespace App\Http\Resources;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class ArtistTracksResource
 * @package App\Http\Resources
 *
 * @property-read Artist $resource
 */
class ArtistTracksResource extends JsonResource
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
            'artist' => [
                'id' => $this->resource->ArtistId,
                'name' => $this->resource->Name,
            ],
            'tracks' => TrackResource::collection($this->resource->tracks)
        ];
    }
}
