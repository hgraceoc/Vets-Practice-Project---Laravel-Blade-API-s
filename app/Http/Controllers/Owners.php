<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Animal;

use App\Http\Requests\OwnerRequest;
use App\Http\Resources\API;


class Owners extends Controller
{
    public function index(){

        $owners = Owner::all(); 

        return view("owners", ['owners'=>$owners]);
    }

    public function create()
    {
        return view('form');
    }

    public function createPost(OwnerRequest $request){
        $data = $request->all();
    
        $owner = Owner::create($data);
        $owner->save();
    
        return redirect("/owners/{$owner->id}");
    }

    public function show($id)
    {
        $owner = Owner::find($id);
        return view("single_owner", [
            "owner" => $owner
    ]);
    }

    public function edit(Owner $owner)
    {
        return view("owners/form", ["owner" => $owner]);
    }

    public function editPost(OwnerRequest $request){
        $data = $request->all();
    
        $owner->fill($data)->save();
    }



}

