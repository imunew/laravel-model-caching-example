<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Album
 * @package App\Models
 *
 * @property-read int $AlbumId
 * @property-read string $Title
 * @property-read Artist $artist
 * @property-read Track[]|Collection $tracks
 */
class Album extends Model
{
    use Cachable;

    /** @var string */
    protected $primaryKey = 'AlbumId';

    /**
     * @return BelongsTo
     */
    public function artist()
    {
        return $this->belongsTo(Artist::class, 'ArtistId', 'ArtistId');
    }

    /**
     * @return HasMany
     */
    public function tracks()
    {
        return $this->hasMany(Track::class, 'AlbumId', 'AlbumId');
    }
}
