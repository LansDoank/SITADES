<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitType extends Model
{
    protected $fillable = ['name','province_code','district_code','subdistrict_code','village_code'];

    public function visits()
{
    return $this->hasMany(Visitor::class);
}
}
