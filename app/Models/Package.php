<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'digital_service_id',
        'package_name',
        'price',
        'description',
    ];

    public function service()
    {
        return $this->belongsTo(DigitalService::class, 'digital_service_id');
    }
}