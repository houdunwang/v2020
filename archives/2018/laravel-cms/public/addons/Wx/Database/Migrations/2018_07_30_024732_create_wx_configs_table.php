<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWxConfigsTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('wx_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('配置名称|input');
            $table->string('value')->nullable()->comment('配置荐|input');
        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('wx_configs');
    }
}
