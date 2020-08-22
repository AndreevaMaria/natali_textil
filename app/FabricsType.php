<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FabricsType extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'fabrics_types';
    protected $fillable = ['title'];
    
    public function FabricList() {
        return $this->hasMany('App\Fabric', 'idFabricsType');
    }
}
