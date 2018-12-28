<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function getName()
    {
        return $this->name;
    }

    public  function getEmail()
    {
        return $this->email;
    }

    public function tests()
    {
        return $this->hasMany('App\Test');
    }
}
