<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upsheet extends Model
{
    protected $guarded = [];

    public function agency(){
        return $this->belongsTo('App\Agency', 'agency_id');
    }

    public function first_holder_job(){
        return $this->belongsTo('App\Job', 'first_holder_job_id');
    }

    public function second_holder_job(){
        return $this->belongsTo('App\Job', 'second_holder_job_id');
    }
}
