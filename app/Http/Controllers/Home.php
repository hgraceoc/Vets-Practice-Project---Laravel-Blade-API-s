<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;

class Home extends Controller
{
    public function index()
    {
        $morning = "Good morning";
        $afternoon = "Good afternoon";
        $evening = "Good evening";

        $time = date('H');

        // var_dump($time);
        $hour;

        if ($time < "12") {
            $hour = $morning;
            
        } else 
        if ($time >= "12" && $time < "17") {
            $hour = $afternoon;
            
        } else

        if ($time >= "17" && $time < "19") {
            $hour = $evening;
        }

        return view("homepage", [
            "hour" => $hour
    ]);
    }

    }

