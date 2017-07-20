<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Review;

class ReviewsController extends Controller
{
    //   
    public function index(){
            $Reviews = Review::all();
            return view('admin.reviews')->with(compact('Reviews'));
        }
    public function review(){
            $Reviews = Review::all();
            return view('testimonial')->with(compact('Reviews'));
        }
    public function REview_upload(Request $request){
        $review = new Review();
        $review->month = $request->month;
        $review->day = $request->day;
        $review->year = $request->year;
        $review->stars = $request->stars;
        $review->reviewed_by = $request->reviewed_by;
        $review->project_title = $request->project_title;
        $review->project_description = $request->project_description;   
        $review->save();
        return redirect('/reviews');
    } 
}
