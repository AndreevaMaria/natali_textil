<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'photos';
    protected $fillable = ['idFabric', 'imagepath'];
    
    public function Fabric()
    {
        return $this->belongsTo('App\Fabric');
    }
}
