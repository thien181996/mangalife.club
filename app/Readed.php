<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Readed extends Model
{
    protected $table = 'readed';

    protected $fillable = [];

    public function getMangaName()
    {
        $manga = Manga::find($this->manga_id)->manga_name;
        return $manga;
    }

    public function getChapterName()
    {
        $chapter = Chapter::find($this->chapter_id)->chapter_name;
        return $chapter;
    }

    public function getUserEmail()
    {
        if($this->user_id)
        {
            $email = User::find($this->user_id)->email;
            return $email;
        } else {
            return "Khách";
        }
    }
}
