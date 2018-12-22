<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasesTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('bases', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('content')->comment('回复内容|textarea');
            $table->integer('rule_id')->comment('规则编号|textarea');
        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('bases');
    }
}
