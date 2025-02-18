<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Village extends Model
{
    public function receptionist(): HasMany  {
        return $this->hasMany(User::class);
    }
}
