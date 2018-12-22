<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWxKeywordsTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('wx_keywords', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('key')->comment('关键词');
            $table->unsignedInteger('wx_rule_id')->comment('规则表关键字段');
            $table->foreign('wx_rule_id')->references('id')->on('wx_rules')->onDelete('cascade');
        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('wx_keywords');
    }
}
