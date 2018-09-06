<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique()->nullable()->comment('邮箱');
            $table->string('mobile')->unique()->nullable();
            $table->string('password');
            $table->string('icon')->nullable()->comment('头像');
            $table->tinyInteger('email_valid')->default(0);
            $table->tinyInteger('mobile_valid')->default(0);
            $table->tinyInteger('is_admin')->default(0)->comment('后台管理员');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
