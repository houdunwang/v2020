<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->comment('标题|input');
            $table->string('author')->nullable()->comment('作者|input');
            $table->text('content')->comment('内容|simditor');
            $table->string('thumb')->nullable()->comment('缩略图|image');
            $table->integer('click')->default(0)->comment('查看次数|input');
            $table->unsignedInteger('category_id')->comment('栏目');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->tinyInteger('istop')->default(1)->comment('置顶|radio|1:是,2:否');
        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
