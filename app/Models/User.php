<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'city',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function task(){
        return $this->hasMany('App\Models\Task');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function companies(){
        return $this->hasMany('App\Models\Company');
    }

    public function tasks(){
        return $this->belongsToMany('App\Models\Task');
    }

    public function project(){
        return $this->belongsToMany('App\Models\Project');
    }




}
