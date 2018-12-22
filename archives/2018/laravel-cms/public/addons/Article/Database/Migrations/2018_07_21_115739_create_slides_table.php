<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->comment('标题|input');
            $table->string('url')->comment('链接|input');
            $table->text('pic')->comment('图片|image');
            $table->integer('click')->comment('查看次数|input');
            $table->tinyInteger('enable')->default(1)->comment('状态|radio|1:开启,2:关闭');
        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
