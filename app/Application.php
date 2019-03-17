<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'porgram','year','semester', 'shift',  'name','fname','mname','dob','gender','phone','email','nationality','guardian','guardian_relation',
        'ssc_result','hsc_result','honrs_result','merit','present_address','parmanent_address','ssc_year','ssc_roll','hsc_year'
    ];
}
