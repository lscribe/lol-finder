<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'image',
        'cost',
        'sell',
        'tags'
    ];

    /**
     * Search item that contains keyword in name.
     *
     * @param Builder $query
     * @param string  $name
     * @return Builder
     */
    public function scopeWhereNameContains($query, string $name)
    {
        return $query->where('name', 'LIKE', '%' . $name . '%');
    }

    /**
     * Search item that contains keyword in tags.
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
