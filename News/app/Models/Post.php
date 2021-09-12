<?php

namespace App\Models;
use App\Models\City;
use App\Models\State;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    function city(){
        return $this->hasOne(City::class,"id","city_id");
    }

    function states(){
        return $this->hasOne(State::class,"id","state_id");
    }
}
