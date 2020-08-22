<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabric extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'fabrics';
    protected $fillable = [
        'idFabricsType',
        'title',
        'articul',
        'price',
        'price_new',
        'decsription',
        'fabric_composition',
        'fabric_width',
        'fabric_density',
        'is_oneton',
        'is_new',
        'is_action',
        'is_trend'
    ];
    
    public function FabricsType()
    {
        return $this->belongsTo('App\FabricsType');
    }

    public function PhotoList() {
        return $this->hasMany('App\Photo', 'idFabric');
    }
}
