<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Minion extends Model
{
    use HasFactory;

    public function minionTypes(): BelongsToMany
    {
        return $this->belongsToMany(MinionType::class);
    }

    public function keywords(): BelongsToMany
    {
        return $this->belongsToMany(Keyword::class);
    }
}
