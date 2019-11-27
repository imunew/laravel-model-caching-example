<?php

namespace App\Http\Resources;

use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class TrackResource
 * @package App\Http\Resources
 *
 * @property-read Track $resource
 */
class TrackResource extends JsonResource
{
    /** @var string|null */
    public static $wrap = null;

    /**
     * {@inheritDoc}
     */
    public static function collection($resource)
    {
        AnonymousResourceCollection::wrap('tracks');
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
            'id' => $this->resource->TrackId,
            'name' => $this->resource->Name,
        ];
    }
}
