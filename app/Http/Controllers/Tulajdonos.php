<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tulajdonos extends Controller
{
    public function rogzites(Request $req){
        $req->validate(
            [
                "rendszam"=>"required|min:6|max:10",
                "tipus"=>"required|min:4|max:15",
                "szin"=>"required",
            ],
            [
                "rendszam.required"=>"A mező kitöltése kötelező!",
                "rendszam.min"=>"Minimum 6 karaktert adj meg!",
                "rendszam.max"=>"Maximum 10 karaktert adj meg!",

                "tipus.required"=>"A mező kitöltése kötelező!",
                "tipus.min"=>"Minimum 4 karaktert adj meg!",
                "tipus.max"=>"Maximum 15 karaktert adj meg!",

                "szin.required"=>"A mező kitöltése kötelező!"
            ],
            [
                "tulajdonos neve"=>"required|min:5|max:30",
                "tulajdonjog kezdete"=>"required",
                "tulajdonjog vege" => "required",

                "tulajdonos neve.required"=>"A mező kitöltése kötelező!",
                "tulajdonjog neve.min"=>"Minimum 5 karaktert adj meg!",
                "tulajdonjog neve.max"=>"Maximum 30 karaktert adj meg!",

                "tulajdonjog kezdete.required"=>"A mező kitöltése kötelező!",
                "tulajdonjog vege.required"=>"A mező kitöltése kötelező"
            ],
            [
                "baleset_idopontja"=>"required",
                "serules_leirasa"=>"required|min:5|max:50",

                "baleset_idopontja.required"=>"A mező kitöltése kötelező!",
                "serules_leirasa.required"=>"A mező kitöltése kötelező",
                "serules_leirasa.min"=>"Minimum 5 karaktert adj meg!",
                "serules_leirasa.max"=>"Maximum 50 karaktert adj meg!",
            ]);
                DB::insert("INSERT INTO autok (rendszam, tipus, szin) VALUES (?,?,?)",[$req->get('rendszam'),$req->get('tipus'),$req->get('szin')]);
                DB::insert("INSERT INTO tulajdonosok (tulajdonosneve, tulajdonjogkezdete, tulajdonjogvege) VALUES (?,?,?)" ,[$req->get('tulajdonosneve'),$req->get('tulajdonjogkezdete'),$req->get('tulajdonjogvege')]);
                DB::insert("INSERT INTO balesetek (baleset_idopontja, serules_leirasa) VALUES (?,?)",[$req->get('baleset_idopontja'),$req->get('serules_leirasa')]);

                return redirect("/autok")-> with("Kész", "Az adat bevitel sikeres");
                return redirect("/tulajdonos")-> with("Kész", "Az adat bevitel sikeres");
                return redirect("/balesetek")-> with("Kész", "Az adat bevitel sikeres");
    }
}

