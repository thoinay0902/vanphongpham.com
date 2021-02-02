<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'orders_id', 'total_quality', 'total_price'
    ];
    public $timestamps = true;

    //hoa don chi tiet thuoc 1 hoa don

    public function Order()
    {
        return $this->belongsTo('App\Order');
    }

    //hoa don chi tiet thuoc san pham

    public function Product()
    {
        return $this->belongsTo('App\Product');
    }


}
