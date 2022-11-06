<?php

namespace App\Http\Controllers;

use App\Models\CategoryAdd;
use App\Models\CategoryRoom;
use App\Models\Marbel;
use App\Models\Thumbnail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class MarbelController extends Controller
{
   //add_marbel_category page
   function add_marbel_cat(){
        $categories = CategoryAdd::paginate(10);
        return view('backend.add_marbel_cat',[
            'categories'=>$categories,
        ]);
    }

    //Category insert
    function add_marbel_insert(Request $request){

        $request->validate([
            'category_name'=>'required|unique:category_adds',
        ]);

             CategoryAdd::insert([
            'user_id'=>Auth::id(),
            'category_name'=>$request->category_name,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success', 'Marbel Category Added Successfully!');
    }

    //Marbel Category delete
    function category_delete($Category_id){
        CategoryAdd::find($Category_id)->delete();
        return back()->with('delete', 'Marbel Category Deleted Successfully!');
    }


    //add_marbel_room category page
    function add_marbel_room(){
        $categoriesRoom = CategoryRoom::paginate(10);
        return view('backend.add_marbel_room',[
            'categoriesRoom'=>$categoriesRoom,
        ]);
    }

    //Category Room insert
    function save_marbel_room(Request $request){

        $request->validate([
            'categoryroom_name'=>'required',
        ]);

        $user_id = CategoryRoom::insertGetId([
            'user_id'=>Auth::id(),
            'categoryroom_name'=>$request->categoryroom_name,
            'created_at'=>carbon::now(),
        ]);
        $uploaded_file = $request->category_room_image;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $user_id.'.'.$extension;

       Image::make($uploaded_file)->resize(720,720)->save(public_path('frontend/images/categoryroom/'.$file_name));

       CategoryRoom::find($user_id)->update([
        'category_room_image'=>$file_name,
       ]);
        return back()->with('success', 'Marbel  Category Room Added Successfully!');
    }

    //Marbel Room Category delete
    function category_room_delete($Category_id){
        $Category_images = CategoryRoom::find($Category_id);
        $Category_images->category_room_image;
        $delete_from = public_path('frontend/images/categoryroom/'.$Category_images->category_room_image);
        unlink($delete_from);


        CategoryRoom::find($Category_id)->delete();
        return back()->with('delete', 'Marbel Category Room Deleted Successfully!');
    }

    //add_marbel page
    function add_marbel(){
        $categories = CategoryAdd::all();
        $categoriesRoom = CategoryRoom::all();
        return view('backend.add_marbel',[
            'categories'=>$categories,
            'categoriesRoom'=>$categoriesRoom,
        ]);
    }

    //marbel insert
    function save_marbel(Request $request){

        $request->validate([
            'category_id'=>'required',
            'mcat_room_id'=>'required',
            'marbel_name'=>'required',
            'marbel_title'=>'required',
            'long_desp'=>'required',
            'marbel_photo'=>'required | image | max:4096 | mimes:jpeg,png,jpg',
            'thumbnail'=>'required',
        ]);

       $marbel_id = Marbel::insertGetId([
            'category_id'=>$request->category_id,
            'mcat_room_id'=>$request->mcat_room_id,
            'marbel_name'=>$request->marbel_name,
            'marbel_title'=>$request->marbel_title,
            'long_desp'=>$request->long_desp,
            'created_at'=>Carbon::now(),
       ]);
       $uploaded_file = $request->marbel_photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $marbel_id.'.'.$extension;

       Image::make($uploaded_file)->resize(900,600)->save(public_path('/frontend/images/marble/pictures/'.$file_name));

       Marbel::find($marbel_id)->update([
        'marbel_photo'=>$file_name,
       ]);

       $uploaded_files = $request->thumbnail;
       $extensions = $uploaded_files->getClientOriginalExtension();
       $file_names = $marbel_id.'.'.$extensions;

       Image::make($uploaded_files)->resize(1920,800)->save(public_path('/frontend/images/marble/thumbnails/'.$file_names));

       Marbel::find($marbel_id)->update([
        'thumbnail'=>$file_name,
       ]);

       return back()->with('success', 'Marbel Added Successfully!');
    }

    //marbel list 
    function marbel_list(){
        $all_marbels = Marbel::paginate(15);
        return view('backend.marbel_list' ,[
            'all_marbels'=> $all_marbels,
        ]);
    }

    //marbel delete 
    function marbel_delete($marbel_id){
        $Marbel_images = Marbel::find($marbel_id);
        $Marbel_images->marbel_photo;
        $delete_from = public_path('/frontend/images/marble/pictures/'.$Marbel_images->marbel_photo);
        unlink($delete_from);

        $Marbel_image = Marbel::find($marbel_id);
        $Marbel_image->thumbnail;
        $delete_from = public_path('/frontend/images/marble/thumbnails/'.$Marbel_image->thumbnail);
        unlink($delete_from);
    
        Marbel::find($marbel_id)->delete();
        return back()->with('delete', 'Marbel Deleted Successfully!');
    }
    
}
