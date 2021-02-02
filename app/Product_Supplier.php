<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Supplier extends Model
{
    protected $table = 'product__suppliers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'products_id', 'suppliers_id'
    ];
    public $timestamps = true;

    public function Product()
    {
        return $this->belongsTo('App\Product');
    }

    public function Supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
    

    
}
