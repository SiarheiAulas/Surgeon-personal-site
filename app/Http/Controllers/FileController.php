<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class FileController extends Controller
{
    
    public function download(Request $request){
        
        $name=explode('/', $request->file);
        $name=$name[0];
        $extension=explode('.', $request->file);
        $extension=$extension[1];
        $id=$request->id;
        $filename=$name.'_'.$id.'.'.$extension;
        
        return Storage::download($request->file, $filename);
    }
    
    public function upload(Request $request){
       
        if($request->is('publs')||$request->is('publs/*')){
            $path=Storage::putFile('publications', $request->file('pdf'));
        }elseif($request->is('confs')||$request->is('confs/*')){
            $path=Storage::putFile('conferences', $request->file('presentation'));
        }elseif($request->is('posts')||$request->is('posts/*')){
            $path=Storage::putFile('posts', $request->file('attach'));
        }elseif($request->is('bios')||$request->is('bios/*')){
            $path=Storage::putFile('/', $request->file('photo'));
        }
        
        return $path;
    }
}
