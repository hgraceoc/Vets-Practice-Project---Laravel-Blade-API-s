<?php

namespace App\Http\Controllers;


use App\Owner;
use App\Animal;
use Illuminate\Http\Request;
use App\Http\Requests\OwnerRequest;
use App\Http\Requests\AnimalRequest;
use App\Http\Resources\API;
use App\Views\Partials;


class Owners extends Controller
{
    public function index(){

        $owners = Owner::all(); 

        return view("owners", ['owners'=>$owners]);
    }

    public function show(Owner $owner)
    {
        return view("single_owner", [
            "owner" => $owner
    ]);
    }

    public function create()
    {
        return view('form');
    }

    public function createPost(OwnerRequest $request){
        $data = $request->all();
        $owner = Owner::create($data);
        
        return redirect("/owners/{$owner->id}");
    }



    public function edit(Owner $owner)
    {
        return view("owners/form", ["owner" => $owner]);
    }

    public function editPost(Owner $owner, OwnerRequest $request){
        $data = $request->all();
    
        $owner->fill($data)->save();

        return redirect("/articles/{$article->id}");
    }



}

