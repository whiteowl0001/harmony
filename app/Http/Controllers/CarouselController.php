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
        public function multiple_upload(){
            $files = Input::file('images');
            $file_count = count($files);
            $uploadcount = 0;
            
            foreach($files as $file){
                $rules = array('file' => 'required');
                $validator = Validator::make(array('file' => $file), $rules);
                if($validator->passes()){
                    $destinationPath = 'carousel';
                    $filename = $file->getClientOriginalName();
                    $upload_success = $file->move($destinationPath, $filename);
                    $uploadcount ++;
                    
                    $extension = $file->getClientOriginalExtention();
                    $entry = new Carousel();
                    $entry->mime = $file->getClientMimeType();
                    $entry->original_filename = $filename;
                    $entry->filename = $file->getFilename().'.'.$extension;
                    $entry->save();
                }
            }
            if($uploadcount == $file_count){
                Session::flash('success', 'Upload Successfully!');
                return redirect()->back();
            }else{
                return redirect()->back();
            }
        }
}
