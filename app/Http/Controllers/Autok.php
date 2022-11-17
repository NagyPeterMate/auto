<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Autok extends Controller
{
    public function autok(){
        return view("autok");
    }

    public function balesetek(){
        return view("balesetek");
    }

    public function tulajdonos(){
        return view("tulajdonos");
    }


    public function rogzites(Request $req){
        $req->validate(
            [
                "vezetéknév"=>"required|min:3|max:150",
                "keresztnév"=>"required|min:3|max:150",
                "szul_ev"=>"required",
            ],
            [
                "vezetéknév.required"=>"A mező kitöltése kötelező!",
                "vezetéknév.min"=>"Minimum 3 karaktert adj meg!",
                "vezetéknév.max"=>"Maximum 150 karaktert adj meg!",

                "keresztnév.required"=>"A mező kitöltése kötelező!",
                "keresztnév.min"=>"Minimum 3 karaktert adj meg!",
                "keresztnév.max"=>"Maximum 150 karaktert adj meg!",

                "szul_ev.required"=>"A mező kitöltése kötelező!"

            ]);
                DB::insert("INSERT INTO autok ( vezeteknev, keresztnev, szul_ev) VALUES (?,?,?)",[$req->get('autok'),$req->get(''),$req->get('szul_ev')]);
                DB::insert("INSERT INTO tulajdonosok ( vezeteknev, keresztnev, szul_ev) VALUES (?,?,?)",[$req->get('vezetéknév'),$req->get('keresztnév'),$req->get('szul_ev')]);
                DB::insert("INSERT INTO balesetek ( vezeteknev, keresztnev, szul_ev) VALUES (?,?,?)",[$req->get('vezetéknév'),$req->get('keresztnév'),$req->get('szul_ev')]);

                return redirect("/autok")-> with("Kész", "Az adat bevitel sikeres");
    }
}