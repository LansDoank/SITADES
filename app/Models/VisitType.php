<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VisitType extends Model
{

    protected $table ='visit_types';
    protected $fillable = ['name','province_code','district_code','subdistrict_code','village_code'];
    protected $with = ['district','province','subdistrict','village'];

    public function province(): BelongsTo {
        return $this->belongsTo(Province::class, 'code', 'province_code');
    }

    public function district(): BelongsTo {
        return $this->belongsTo(District::class, 'code', 'district_code');
    }

    public function subdistrict(): BelongsTo {
        return $this->belongsTo(SubDistrict::class,'code','sub_district_code');
    }

    public function village(): BelongsTo {
        return $this->belongsTo(Village::class,'code','village_code');
    }
}
