<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Conf;
use App\Models\Publ;

class SearchController extends Controller
{
    public function search(Request $request){
        
        $query=$request->input('search');
        
        $ru_title='Результаты поиска';
        $en_title='Search results';
    
        $posts=Post::search($query)->get();
        $confs=Conf::search($query)->get();
        $publs=Publ::search($query)->get();
        
        return view('search', compact('posts', 'confs', 'publs', 'ru_title', 'en_title'));
    }
}
