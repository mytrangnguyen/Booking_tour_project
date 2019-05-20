<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class page_controller extends Controller
{
    public function getIndex(){
        $slide =App\Slide::all();
    	return view('Page.trangchu',compact('slide'));
    }
    public function getAbout(){
    	return view('Page.about');
    }
    public function getContact(){
    	return view('Page.contact');
    }
    public function getDestination(){
    	return view('Page.destination');
    }
    public function getDiscount(){
    	return view('Page.discount');
    }
    public function getBooking(){
    	return view('Page.booking');
    }
    public function getBlog(){
    	return view('Page.blog');
    }

    //Slide
    public function ex(){         
        $slide =App\Slide::all();
        $new_product = App\product::where('new',1)->paginate(8);
        $pro_product = App\product::where('promotion_price','<>',0)->paginate(8);
        return view('page.trangchu',compact('slide','new_product','pro_product'));

    }   

    public function getDetail(){
        return view('Page.detail');
    }        

}
