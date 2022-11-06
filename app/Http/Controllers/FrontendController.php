<?php

namespace App\Http\Controllers;

use App\Models\banners;
use App\Models\banners2;
use App\Models\CategoryAdd;
use App\Models\CategoryRoom;
use App\Models\Marbel;
use App\Models\Review;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //front page
    function index(){
        $banners = banners::all();
        $banners2 = banners2::all();
        $categoriesRoom = CategoryRoom::all();
        $marbels = Marbel::latest()->take(9)->get();
        return view('frontend.index',[
            'banners'=>$banners,
            'banners2'=>$banners2,
            'categoriesRoom'=>$categoriesRoom,
            'marbels'=>$marbels,
        ]);
    }

    //marbel page
    function marbels(){
        $categories = CategoryAdd::all();
        return view('frontend.marbel',[
            'categories'=>$categories,
        ]);
    }

    //new_Stones page
    function new_Stones(){
        $marbels = Marbel::get();
        return view('frontend.new_Stones',[
            'marbels'=>$marbels,
        ]);
    }
    //customers page
    function customers(){
        $reviews = Review::get();
        return view('frontend.customers',[
            'reviews'=>$reviews,
        ]);
    }

    //Contact page
    function Contact(){
        return view('frontend.Contact');
    }

    //marbel details page
    function marbel_details($marbel_id){
        $product_info = Marbel::find($marbel_id);
       return view('frontend.marbel_details',[
           'product_info'=>$product_info,
       ]);
    }

    //marbels_by_category
    function marbels_by_category($id){
        $marbels = Marbel::where('category_id', $id)->get();
        return view('frontend.new_Stones', [
            'marbels'=> $marbels,
        ]);
    }

     //marbels_by_category
     function marbels_by_categoryroom($id){
        $marbels = Marbel::where('mcat_room_id', $id)->get();
        return view('frontend.new_Stones', [
            'marbels'=> $marbels,
        ]);
    }
    
}
