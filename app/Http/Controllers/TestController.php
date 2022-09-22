<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function test(Request $request) {
        $list = false;
        if ($request->has('list') && $request->list==true){
            $list = true;
        }
        $ime = "luka" ;
        $niz = [
            "Luka Lukic",
            "Marko Markovic",
            "Petar Petrovic"
        ];
        return view('test', [
            "ime" => $ime,
            "niz" => $niz,
            "list" => $list
        ]);
    }

}
