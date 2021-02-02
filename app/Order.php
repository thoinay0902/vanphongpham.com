<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'order_status', 'order_amount'
    ];
    public $timestamps = true;

    //hoa don thuoc mot nguoi dung

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    //hoa don co nhieu chi tiet hoa don

    public function OrderDetail()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
