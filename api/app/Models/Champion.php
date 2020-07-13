<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Champion extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'lore',
        'image',
        'tags'
    ];

    /**
     * Search champion that contains keyword in tags.
     *
     * @param Builder $query
     * @param string  $tags
     * @return Builder
     */
    public function scopeWhereTagsContains($query, string $tags)
    {
        return $query->where('tags', 'LIKE', '%' . $tags . '%');
    }
}
