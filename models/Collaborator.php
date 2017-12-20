<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'date_of_birth',
        'address',
        'zipcode',
        'city',
        'district_id',

        'marital_status_id',
        'gender',
        'admission_date',

    ];
//    protected $guarded = [];
}
