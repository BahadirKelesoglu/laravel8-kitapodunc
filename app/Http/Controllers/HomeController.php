<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function categorylist(){

        return Category::where('parent_id','=',0)->with('children')->get();
    }



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

        public  function login(){
            return view('admin.login');
        }

        public function logincheck(Request $request)
        {

            if($request->isMethod('post')) {

               $credentials = $request->only('email', 'password');


                if ((Auth::attempt($credentials))) {
                    $request->session()->regenerate();
                    return redirect()->intended('admin');
                }

                return back()->withErrors([
                    'email' => 'The Provided credentials do not match our records.',
               ]);


            }
            else{
                    return view('home.index');
                }


        }
    public function logout (Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('admin/login');
    }



}



