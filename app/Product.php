<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'catetories_id', 'order_details_id', 'shopping_cards_id', 'product_name', 'product_quality', 'product_price', 'product_image', 'product_discribe', 'product_discount', 'product_unitprice'
    ];
    public $timestamps = true;

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    //san pham co nhieu hoa don chi tiet

    public function OrderDetail()
    {
        return $this->hasMany('App\OrderDetail');
    }

    //1 san pham co nhieu gio hang

    public function ShoppingCard()
    {
        return $this->hasMany('App\ShoppingCard');
    }

    //San pham co nhieu danh gia

    public function RattingStar()
    {
        return $this->hasMany('App\RattingStar');
    }

    public function Product_Supplier()
    {
        return $this->hasMany('App\Product_Supplier');
    }

    
    
}
