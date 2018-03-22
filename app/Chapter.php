<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapters';

    protected $fillable = [];

    public function getMangaName()
    {
        $manga = Manga::find($this->manga_id)->manga_name;
        return $manga;
    }
}
