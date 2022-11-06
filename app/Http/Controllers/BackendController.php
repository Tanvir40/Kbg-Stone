<?php

namespace App\Http\Controllers;

use App\Models\banners;
use App\Models\banners2;
use App\Models\Contact;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BackendController extends Controller
{
    //add banners
    function add_banner(){
        $banners = banners::all();
        return view('backend.banner',[
            'banners'=>$banners,
        ]);
    }
        // save banners
   public function save_banner(Request $request){
    $request->validate([
        'bannername' => 'required',
        'bannerimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $banner_id = banners::insertGetId([
            'bannername'=>$request->bannername,
            'heading_one'=>$request->heading_one,
            'heading_two'=>$request->heading_two,
            'heading_three'=>$request->heading_three,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->bannerimage;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $banner_id.'.'.$extension;

       Image::make($uploaded_file)->resize(1400,500)->save(public_path('frontend/images/banners/'.$file_name));

       banners::find($banner_id)->update([
        'bannerimage'=>$file_name,
       ]);
       return back()->with('success', 'banners Added Successfully!');
   }

   //delete banners
   function banner_delete($banner_id){
    $banner_images = banners::find($banner_id);
    $banner_images->bannerimage;
    $delete_from = public_path('frontend/images/banners/'.$banner_images->bannerimage);
    unlink($delete_from);


    banners::find($banner_id)->delete();
    return back()->with('delete', 'Banners Image Deleted Successfully!');
    }

    //active carousel_image
    function banner_active($banner_id){
        banners::find($banner_id)->update([
        'status'=>1,
        ]);
    return back()->with('active', 'Banners Image Activated Successfully!');
    }

    //De-active carousel_image
    function banner_deactive($banner_id){
        banners::find($banner_id)->update([
        'status'=>2,
        ]);
    return back()->with('deactive', '
    banners Image De-activated Successfully!');
    }

    
    //2nd_banner_image page
    function banner_image_2(){
        $banners2 = banners2::all();
        return view('backend.banner_image_2',[
            'banners2'=>$banners2,
        ]);
    }

     // save banners
   public function save_banner2(Request $request){

        $request->validate([
        'bannername' => 'required',
        'bannerimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $banner_id = banners2::find($request->id)->update([
            'bannername'=>$request->bannername,
            'updated_at'=>Carbon::now(),
       ]);

       $uploaded_file = $request->bannerimage;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $banner_id.'.'.$extension;

       Image::make($uploaded_file)->resize(2048,1540)->save(public_path('frontend/images/2nd/'.$file_name));

       banners2::find($banner_id)->update([
        'bannerimage'=>$file_name,
       ]);
       return back()->with('success', 'banners Updated Successfully!');
   }


     //contact submit
     function contact_submit(Request $request){
        Contact::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'marbel_name'=>$request->marbel_name,
        'phone'=>$request->phone,
        'requirement'=>$request->requirement,
        'created_at'=>Carbon::now(),
        ]);
    return back()->with('success', '
    Form Submitted Successfully!');
    }

    //contact view
    function view_contact(){
        $contacts = Contact::paginate(15);
        return view('backend.view_contact',[
            'contacts'=>$contacts,
        ]);
    }

    //delete contact
   function contact_delete($contact_id){
    Contact::find($contact_id)->delete();
    return back()->with('delete', 'Contacts Deleted Successfully!');
    }

    //add_customer_review page
    function add_customer_review(){
        $reviews = Review::paginate(10);
        return view('backend.add_customer_review',[
            'reviews'=>$reviews,
        ]);
    }

    //add_customer_review page
    function save_clint_review(Request $request){

        $request->validate([
            'review' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'star' => 'required',
            ]);
        
        $review_id = Review::insertGetId([
            'review'=>$request->review,
            'star'=>$request->star,
            'created_at'=>Carbon::now(),
       ]);

       $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $review_id.'.'.$extension;

       Image::make($uploaded_file)->resize(100,80)->save(public_path('frontend/images/review/'.$file_name));

       Review::find($review_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'Review Added Successfully!');
    }

     //delete Review
   function clint_review_delete($review_id){
    $Review_images = Review::find($review_id);
    $Review_images->photo;
    $delete_from = public_path('frontend/images/review/'.$Review_images->photo);
    unlink($delete_from);

    Review::find($review_id)->delete();
    return back()->with('delete', 'Review Deleted Successfully!');
    }
}
