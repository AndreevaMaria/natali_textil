<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
    use Notifiable;

    protected $primaryKey = 'id';
   // protected $table = 'photos';
    protected $fillable = ['idFabric', 'imagepath'];
    
    public function Fabric() {
        return $this->belongsTo('App\Fabric');
    }
}
