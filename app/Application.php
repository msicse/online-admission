<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Application extends Authenticatable
{

    use Notifiable;
    
    protected $fillable = [
        'porgram','year','semester','level', 'shift',  'name','fname','mname','dob','gender','phone','email','nationality','guardian','guardian_relation',
        'ssc_result','hsc_result','honrs_result','merit','present_address','parmanent_address','ssc_year','ssc_roll','hsc_year'
    ];

    protected $hidden = ['password',  'remember_token'];


    public function academics()
    {
        return $this->hasMany('App\Academic');
    }

    public function programs(){
        return $this->belongsToMany('App\Programe')->withTimestamps();
    }
}
