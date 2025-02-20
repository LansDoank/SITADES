<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Village extends Model
{
    protected $table = 'villages';
    protected $fillable = ['code','sub_districts_code','name'];

    public function receptionist(): HasMany  {
        return $this->hasMany(User::class);
    }

    public function visit(): HasMany {
        return $this->hasMany(VisitType::class,'village_code','code');
    }
}
