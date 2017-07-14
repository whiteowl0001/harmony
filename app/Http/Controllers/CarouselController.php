<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Responce;
use Redirect;
use Session;
use App\Carousel;

class CarouselController extends Controller
{
        public function index(){
            return view('admin.carousel');
        }
        
        public function multiple_upload(Request $request){
            
            if($request->hasFile('images')){

                        $filename = $file->getClientOriginalName();
                        $extension = $file->getClientOriginalExtention();
                        $destinationPath = base_path() . '\public\carousel';
                        $upload_success = $file->move($destinationPath, $filename);
                        
                        $entry = new Carousel();
                        $entry->mime = $file->getClientMimeType();
                        $entry->original_filename = $filename;
                        $entry->filename = $file->getFilename().'.'.$extension;
                        $entry->save();
            }
           return redirect()->back();
        }
}
