<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Technology extends Model implements HasMedia
{
    use HasFactory, HasUuids, InteractsWithMedia;

    public function discipline(): BelongsTo
    {
        return $this->belongsTo(Discipline::class);
    }

    public function works(): BelongsToMany
    {
        return $this->belongsToMany(Work::class, 'technology_work');
    }
}
