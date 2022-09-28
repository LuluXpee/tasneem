<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\SubmitEmail;
use App\Models\Contact;
use App\Models\Deatil;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){

         $products = Product::all()->take(3);
        $deatils = Deatil::all();
        $videos = Video::all();
        $sliders = Slider::all();
        $contacts = Contact::all();

       return view('front.index', compact('products', 'deatils' , 'videos' , 'sliders' , 'contacts'));


    }
    public function services(){

        $products = Product::all();
         $contacts = Contact::all();

        return view('front.service', compact('products', 'contacts'));
    }

    public function about(){

         $contacts = Contact::all();
          $deatils = Deatil::all();

        return view('front.about', compact('contacts','deatils'));

    }

    public function contact(){
 $contacts = Contact::all();

        return view('front.contact', compact('contacts'))->with('success', 'Thanks ');
    }

     public function SubmitEmail(Request $request){

        $data = $request->except('_token');

        Mail::to('info@tasneem.ps')->send(new SubmitEmail($data));

        return redirect()->back()->with('success','Thamks');
    }


}
