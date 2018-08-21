<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWxRulesTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('wx_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->comment('规则名称');
            $table->string('module')->comment('模块');
        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('wx_rules');
    }
}
