<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_access extends Model
{
    protected $table = 'role_accesses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'role_name', 'role_discribe'
    ];
    public $timestamps = true;

    //quyen truy cap co nhieu nguoi dung

    public function User()
    {
        return $this->hasMany('App\User');
    }

}
