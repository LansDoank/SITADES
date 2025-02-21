<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    protected $table = 'districts';
    protected $fillable = ['code', 'province_code', 'name'];

    public function visit(): HasMany {
        return $this->hasMany(VisitType::class,'district_code','code');
    }
    public function visitor() :HasMany {
        return $this->hasMany(Visitor::class,'code', 'district_code');
    }
}
