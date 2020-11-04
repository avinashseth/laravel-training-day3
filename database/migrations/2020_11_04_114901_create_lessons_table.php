<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id(); // primary, auto incremenet
            $table->string('lesson_name', 50);
            $table->string('lesson_slug', 255);
            $table->bigInteger('lesson_instructor');
            $table->boolean('is_public')->default(0); // 0 or 1 tinyInt(1)
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
        Schema::dropIfExists('lessons');
    }
}
