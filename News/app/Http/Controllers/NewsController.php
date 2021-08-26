<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\State;
use App\Models\City;
use App\Models\Post;

class NewsController extends Controller
{
    function index(){
        return view("home",["states"=>State::all(),"city"=>City::all()]);
    }

    function showForm(){
        return view("add",["states"=>State::all(),"city"=>City::all()]);
    }

    function addCity(Request $req){
        $city = new City();

        $city->city = $req->city;
        $city->state_id = $req->state_id;
        $city->save();
        return redirect()->back();
    }


    function addState(Request $req){
        $state = new State();

        $state->state = $req->state;
        $state->save();
        return redirect()->back();
    }

    function saveNews(Request $req){
        $post = new Post();

        $post->title = $req->title;
        $post->news = $req->news;
        $post->state_id = $req->state_id;
        $post->city_id = $req->city_id;

        $post->save();
        return redirect()->back();
    }

    function cityNews($cityid){
        return view("home",["cityid"=>$cityid,"states"=>State::all(),"city"=>City::all()]);
    }
}
