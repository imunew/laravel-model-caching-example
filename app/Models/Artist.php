<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * Class Artist
 * @package App\Models
 *
 * @property-read int $ArtistId
 * @property-read string $Name
 * @property-read Album[]|Collection $albums
 * @property-read Track[]|Collection $tracks
 */
class Artist extends Model
{
    use Cachable;

    /** @var string */
    protected $primaryKey = 'ArtistId';

    /**
     * @return HasMany
     */
    public function albums()
    {
        return $this->hasMany(Album::class, 'ArtistId', 'ArtistId');
    }

    /**
     * @return HasManyThrough
     */
    public function tracks()
    {
        return $this->hasManyThrough(
            Track::class,
            Album::class,
            'ArtistId',
            'AlbumId',
            'ArtistId',
            'AlbumId'
        );
    }
}
