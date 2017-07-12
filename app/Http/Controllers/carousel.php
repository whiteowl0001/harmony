<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Responce;
use Redirect;
use Session;
use App\Carousels;

class CarouselController extends Controller
{
        public function upload(){
            $files = Input::file('images');
            $file_count = count($files);
            $uploadcount = 0;
            
            foreach($files as $file){
                $rules = array('file' => 'required');
                $validator = Validator::make(array('file' => $file), $rules);
                if($validator->passes()){
                    $destinationPath = 'carousel';
                    $filename = $file->move($destinationPath, $filename);
                    $uploadcount ++;
                    
                    $extenstion = $file->getClientOriginalExtention();
                    $entry = new Carousels();
                    $entry->mime = $file->getClientMimeType();
                    $entry->filename = $filename;
                    $entry->image = $file-getFilename(). '.' .$extention;
                    $entry->save();
                }
            }
            if($uploadcount == $file_count){
                Session::flash('sucess', 'Upload Successful!');
                return Redirect::to('carousel');
            }
        }
}
