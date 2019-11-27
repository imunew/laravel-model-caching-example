<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Track
 * @package App\Models
 *
 * @property-read int $TrackId
 * @property-read int $AlbumId
 * @property-read string $Name
 * @property-read Album $album
 */
class Track extends Model
{
    use Cachable;

    /** @var string */
    protected $primaryKey = 'TrackId';

    /**
     * @return BelongsTo
     */
    public function album()
    {
        return $this->belongsTo(Album::class, 'AlbumId', 'AlbumId');
    }
}
