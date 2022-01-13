<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{

    public static function categorylist(){

        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function countreview($id){


        return Review::where('book_id',$id)->count();
    }

    public static function getsetting(){

        return Setting::first();
    }



    public function index(){
        $setting = Setting::first();
        $slider = Book::select('id','title','image','author','subject','publishdate','slug','status')->limit(4)->inRandomOrder()->get();
        $daily = Book::select('id','title','image','author','subject','publishdate','slug','status')->limit(4)->inRandomOrder()->get();
        $last = Book::select('id','title','image','author','subject','publishdate','slug','status')->limit(4)->orderByDesc('id')->get();



        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
            'last'=>$last,
            'page'=>'home',

        ];

        return view('home.index', $data);
    }

    public function book($id,$slug){
        $data = Book::find($id);
        $cate = Category::find($id);
        $datalist = Image::where('book_id',$id)->get();
        $reviews = Review::where('book_id',$id)->get();
        $reviews2 = Review::where('user_id',$id)->get();
        $reservation = Reservation::where('book_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.book_detail',['data'=>$data, 'cate'=>$cate, 'datalist'=>$datalist, 'reviews'=>$reviews, 'reservation'=>$reservation, 'reviews2'=>$reviews2]);
    }

    public function getbook(Request $request){
        $search=$request->input('search');
        $count= Book::where('title', 'like', '%'. $search . '%')->get()->count();
        if ($count==1){
            $data= Book::where('title', 'like', '%'. $search . '%')->first();
            return redirect()->route('book',['id'=>$data->id, 'slug'=>$data->slug]);
        }
        else{
            return redirect()->route('booklist',['search'=>$search]);
        }

    }

    public function booklist($search){
        $datalist= Book::where('title', 'like', '%'. $search . '%')->get();
        return view('home.search_books',['search'=>$search, 'datalist'=>$datalist]);
    }


    public function addtocard($id){
        echo "add to card <br>";
        $data = Book::find($id);
        print_r($data);
        exit();
        return view('home.about', ['setting'=>$setting]);
    }

    public function categorybooks($id,$slug){
        $datalist = Book::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('home.category_books', ['data'=>$data, 'datalist'=>$datalist]);
    }

    public function blank(){
        $setting = Setting::first();
        return view('home._blank', ['setting'=>$setting]);
    }





    //
    public function aboutus(){
        $setting = Setting::first();
        return view('home.about', ['setting'=>$setting]);
    }
    public function contact(){
        $setting = Setting::first();
        return view('home.contact', ['setting'=>$setting]);
    }

    public function sendmessage(Request $request){
        $data = new Message();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->note = $request->input('note');

        $data->save();
        return redirect()->route('contact')->with('success','Your Massage Has Saved Successfully');;
    }

    public function references(){
        $setting = Setting::first();
        return view('home.references', ['setting'=>$setting]);
    }
    public function faq(){
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq', ['datalist'=>$datalist]);
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

        return redirect('/');
    }




}



