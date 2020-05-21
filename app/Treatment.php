<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
//above route used for the collection return type

class Treatment extends Model
{

    protected $fillable = ['name'];

    public $timestamps = false;

    public function animals()
        {
            return $this->belongsToMany(Animal::class);
        }

    static public function fromString(string $string) : Treatment
        {
            return Treatment::create(['name' => $string]);
        }

    }



//    static public function collectionFromStrings(array $strings) : Collection
// {
//     return collect($strings)
//     ->map([Treatment:class, ])
// }    

