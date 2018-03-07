<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [

        'name',
        'description',
        'user_id',
        'company_id',
        'days',

    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
}
