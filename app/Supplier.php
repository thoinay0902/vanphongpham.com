<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
   protected  $table = 'suppliers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'supplier_name', 'supplier_adress', 'supplier_discribe'
    ];
    public $timestamps = true;

    //nha cung cap co nhieu san pham_ nha cung cap

    public function Product_Supplier()
    {
        return $this->hasMany('App\Product_Supplier');
    }
}
