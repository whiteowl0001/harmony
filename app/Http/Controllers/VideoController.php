<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video;

class VideoController extends Controller
{
    public function index(){
            $Videos = Video::all();
            return view('admin.video')->with(compact('Videos'));
        }
    public function video(){
            $Videos = Video::all();
            return view('video-tutorial')->with(compact('Videos'));
        }
    public function video_name(Request $request){
        $video_link = new Video();
        $video_link->video_name = $request->video_name;
        $video_link->save();
        return redirect('/video');
    }    
}
