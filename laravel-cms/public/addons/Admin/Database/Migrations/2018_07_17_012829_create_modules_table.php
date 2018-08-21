<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->comment('模块名称|input');
            $table->string('name')->comment('模块标识|input');
            $table->text('is_default')->comment('默认模块|radio');
            $table->text('front_access')->comment('前台访问|radio');
        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
