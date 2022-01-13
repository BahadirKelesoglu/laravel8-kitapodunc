<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Reservation;


class HomeController extends Controller
{
    public  function __construct(){
        $this->middleware('admin');
    }

    public  function index(){
        $datalist = Reservation::all();
       return view('admin.index',['datalist'=>$datalist]);
    }




}


