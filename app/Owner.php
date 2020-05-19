<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    protected $fillable = ["first_name", "last_name", "telephone", "address_1", "address_2", "town", "postcode"];
    
    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function fullAddress()
    {
        return $this->address_1 . ", " . $this->address_2 . ", " . $this->town . ", " . $this->postcode;
    }

    public function animals(){
        return $this->hasMany(Animal::class);
    }

    public function validPhoneNumber(){
        return preg_match("/\d{4}\s\d{7}/", $this->telephone) === 1;
    }

}

