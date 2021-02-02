<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'role_id', 'fullname', 'username', 'password', 'adress', 'phone', 'sex', 'email', 'birthday','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Nguoi dung thuoc quyen truy cap

    public function Role_access()
    {
        return $this->belongsTo('App\Role_access');
    }

    //nguoi dung co nhieu hoa don

    public function Order()
    {
        return $this->hasMany('App\Order');
    }

    //Nguoi dung co nhieu danh gia

    public function RattingStar()
    {
        return $this->hasMany('App\RattingStar');
    }

    //nguoi dung co 1 gio hang

    public function ShoppingCard()
    {
        return $this->hasOne('App\ShoppingCard');
    }

}
