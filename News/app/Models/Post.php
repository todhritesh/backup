<?php

namespace App\Models;
use App\Models\City;
use App\Models\State;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    function city(){
        return $this->hasMany(City::class,"id","city_id");
    }

    function states(){
        return $this->hasMany(State::class,"state_id","id");
    }
}
