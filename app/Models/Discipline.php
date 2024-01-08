<?php

namespace App\Models;

use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discipline extends Model implements Sortable
{
    use HasFactory, HasUuids, SortableTrait;

    public function technologies(): HasMany
    {
        return $this->hasMany(Technology::class);
    }
}
