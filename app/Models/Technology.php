<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Technology extends Model implements HasMedia, Sortable
{
    use HasFactory, HasUuids, InteractsWithMedia, SortableTrait;

    public function discipline(): BelongsTo
    {
        return $this->belongsTo(Discipline::class);
    }

    public function works(): BelongsToMany
    {
        return $this->belongsToMany(Work::class, 'technology_work');
    }

    public function buildSortQuery()
    {
        return static::query()->where('discipline_id', $this->discipline_id);
    }

    public function scopeFeatured($query)
    {
        return $query
            ->where('featured', true);
    }
}
