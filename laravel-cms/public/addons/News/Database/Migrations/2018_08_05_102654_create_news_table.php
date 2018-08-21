<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('data')->comment('图文内容|textarea');
            $table->integer('rule_id')->comment('规则编号|input');
        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
