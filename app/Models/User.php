<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'latitude', 'longitude'
    ];

    protected $visible = [
        'id',
        'name',
        'latitude',
        'longitude',
        'number_scan',
        'average_impact'
    ];

    protected $appends = ['number_scan', 'average_impact'];


    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function getNumberScanAttribute()
    {
        return $this->tickets()->count();
    }

    public function getAverageImpactAttribute()
    {
        // return $this->tickets()->avg('impact');
        return Ticket::where('user_id', $this->id)->orderBy('id', 'desc')->offset(0)->limit(2)->get()->avg('impact');
    }

}
