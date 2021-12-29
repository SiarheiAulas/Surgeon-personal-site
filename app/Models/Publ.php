<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Publ extends Model
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
     
        return array('ru_header' => $array['ru_header'],'en_header' => $array['en_header'], 'ru_abstract'=>$array['ru_abstract'], 'en_abstract'=>$array['en_abstract'], 'ru_biblio'=>$array['ru_biblio'], 'en_biblio'=>$array['en_biblio']);
    }

}
