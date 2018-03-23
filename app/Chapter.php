<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapters';

    protected $fillable = [];

    public function getMangaName()
    {
        if($this->manga_id)
        {
            $manga = Manga::find($this->manga_id)->manga_name;
            return $manga;
        } else {
            return "NULL";
        }
    }
}
