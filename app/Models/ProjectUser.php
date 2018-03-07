<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    //
    protected $fillable = [

        'name',
        'description',
        'company_id',
        'user_id',
        'days',

    ];
}
