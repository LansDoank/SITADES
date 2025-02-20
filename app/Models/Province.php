<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{

    protected $table = 'provinces';
    protected $fillable = ['code', 'name'];

    public function visit() :HasMany {
        return $this->hasMany(VisitType::class,'province_code', 'code');
    }
}
