<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Work extends Model implements HasMedia
{
    use HasFactory, HasUuids, InteractsWithMedia;
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'featured' => 'boolean',
    ];

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class, 'technology_work');
    }

    public function getDisciplinesAttribute()
    {
        return $this->technologies()
            ->with("discipline")
            ->get()
            ->pluck("discipline")
            ->unique();
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
