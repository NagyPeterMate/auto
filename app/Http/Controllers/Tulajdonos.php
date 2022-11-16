<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tulajdonos extends Controller
{
    public function tulajdonos(){
        return view("tulajdonos");
    }
}
