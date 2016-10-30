<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{
    //use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'wusers';
    public $primaryKey='UserNo';
    public $timestamps = false;
    public $incrementing=false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
