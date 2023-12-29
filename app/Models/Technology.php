<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Technology extends Model
{
    use HasFactory, HasUuids;

    public function discipline(): BelongsTo
    {
        return $this->belongsTo(Discipline::class);
    }

    public function works(): BelongsToMany
    {
        return $this->belongsToMany(Work::class, 'technology_work');
    }
}
