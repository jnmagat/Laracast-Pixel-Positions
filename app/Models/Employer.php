<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Job;

class Employer extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the Employer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    } 

    public function jobs() : HasMany {
        return $this->hasMany(Job::class);
    }
}
