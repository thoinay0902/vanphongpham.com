<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catetory extends Model
{
    protected $table = 'catetories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'catetory_name','catetory_description'
    ];
    public $timestamps = true;

    //Loai san pham co nhieu san pham

    public function Product()
    {
        return $this->hasMany('App\Product');
    }
}
