<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ["name", "type", "dob", "weight", "height", "biteyness", "owner_id" ];

    public function owner() 
    {
        return $this->belongsTo(Owner::class);
    }

    public function dangerous() {
        if ($this->biteyness > 3) {
            echo 'dangerous';
        }
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }
}
