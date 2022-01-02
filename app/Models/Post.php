<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory;
    use Searchable;
    
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
    public function toSearchableArray()
    {
        $array = $this->toArray();
     
        return array('ru_header' => $array['ru_header'],'en_header' => $array['en_header'], 'ru_body'=>$array['ru_body'], 'en_body'=>$array['en_body']);
    }

    public function getRouteKeyName(){
        
        return 'slug';
    }
}
