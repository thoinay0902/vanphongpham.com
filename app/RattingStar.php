<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RattingStar extends Model
{
    protected $table = 'ratting_stars';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'users_id', 'products_id', 'avr_number_star'
    ];
    public $timestamps = true;

    //Danh gia thuoc san pham

    public function Product()
    {
        return $this->belongsTo('App\Product');
    }

    //danh gia thuoc nguoi dung

    public function User()
    {
        return $this->belongsTo('App\User');
    }

}

