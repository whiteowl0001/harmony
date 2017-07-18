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
}
