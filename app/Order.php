<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use Notifiable;

    protected $primaryKey = 'id';
   // protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'order_num',
        'order_date',
        'fabrics_id',
        'amount',
        'final_date',
        'is_active',
        'is_payed',
        'is_onway',
        'is_delivered'
    ];
    
    public function User() {
        return $this->belongsTo('App\USer');
    }
    public function FaricsList() {
        return $this->hasMany('App\Fabric');
    }
}