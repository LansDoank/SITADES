<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Visitor extends Model
{
    use HasFactory;
    protected $table = 'visitors';
    protected $fillable = ['fullname', 'institution', 'telephone', 'address', 'check_in', 'check_out', 'visitor_photo','objective', 'i_n_i', 'province_code', 'district_code', 'subdistrict_code', 'village_code'];

    public function visitType(): BelongsTo
    {
        return $this->belongsTo(VisitType::class);
    }
}
