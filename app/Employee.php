<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'gender','skills','dob','city','address'
    ];
    
    public function phone()
    {
        return $this->hasOne('App\Phone');
    }
}
