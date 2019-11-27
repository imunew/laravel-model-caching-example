<?php

namespace App\Http\Resources;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class ArtistResource
 * @package App\Http\Resources
 *
 * @property-read Artist $resource
 */
class ArtistResource extends JsonResource
{
    /** @var string|null */
    public static $wrap = null;

    /**
     * {@inheritDoc}
     */
    public static function collection($resource)
    {
        AnonymousResourceCollection::wrap('artists');
        return parent::collection($resource);
    }

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->ArtistId,
            'name' => $this->resource->Name,
            'albums' => $this->resource->albums->map(function (Album $album) {
                return [
                    'id' => $album->AlbumId,
                    'title' => $album->Title
                ];
            })
        ];
    }
}
