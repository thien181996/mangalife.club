<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapterMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_mangas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapter_id');
            $table->integer('chapter_sort');
            $table->text('chapter_image_url');
            $table->text('chapter_image_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter_mangas');
    }
}
