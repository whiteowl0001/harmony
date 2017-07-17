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
        $video_link = $request;
        
        $entry = new Video();
        $entry->video_name = $video_link;
        $entry->save();
        
        return redirect('/video');
    }    
}
