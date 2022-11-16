<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Autok extends Controller
{
    public function autok(){
        return view("auto");
    }
}
