<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Balesetek extends Controller
{
    public function balesetek(){
        return view("balesetek");
    }
}
