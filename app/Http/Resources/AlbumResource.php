<?php

namespace App\Http\Resources;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class AlbumResource
 * @package App\Http\Resources
 *
 * @property-read Album $resource
 */
class AlbumResource extends JsonResource
{
    /** @var string|null */
    public static $wrap = null;

    /**
     * {@inheritDoc}
     */
    public static function collection($resource)
    {
        AnonymousResourceCollection::wrap('albums');
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
            'id' => $this->resource->AlbumId,
            'title' => $this->resource->Title,
            'artist' => [
                'id' => $this->resource->artist->ArtistId,
                'name' => $this->resource->artist->Name
            ],
        ];
    }
}
