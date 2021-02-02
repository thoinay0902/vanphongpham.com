<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCard extends Model
{
    protected $table = 'shopping_cards';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'users_id', 'quality'
    ];
    public $timestamps = true;

    //Gio hang thuoc san pham

    public function Product()
    {
        return $this->belongsTo('App\Product');
    }

    //gio hang thuoc nguoi dung

    public function User()
    {
        return $this->belongsTo('App\User');
    }


}
