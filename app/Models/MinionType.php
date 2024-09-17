<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MinionType extends Model
{
    use HasFactory;

    public function minions(): BelongsToMany
    {
        return $this->belongsToMany(Minion::class);
    }
}
