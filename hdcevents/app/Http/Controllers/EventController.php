<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Thiago";
        $idade = 24;
    
        $arr = [10,20,30,40,50];
        $nomes = ["Matehus", "Maria", "João", "Saulo"];
    
        return view('welcome',
        [
            "nome" => $nome,
            "idade" => $idade,
            "profissao" => "programador",
            "arr" => $arr,
            "nomes" => $nomes
        ]);   
    }

    public function create() {
        return view("events.create");
    }

    public function contact() {
        return view('contact');
    }
}
