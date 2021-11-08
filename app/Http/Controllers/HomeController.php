<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index', ['name' => 'BAHADIR KELEŞOĞLU']);
    }


    //
    public function about(){
        return view('home.about');
    }
#adres satırına ../test/5 gibi int yazınca onu basıyor
#asıl yazıyı burda yazabiliyoruz return view koduyla view dosyasının home dosyasındaki test
#kodunu aç diyoruz ve 2 parametre alarak aç diyoruz
    public function test($id, $name){

        $data['id']=$id;
        $data['name']=$name;
     return view('home.test', $data);





        }

    }

