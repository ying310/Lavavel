<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
          //會員編號
            $table->bigIncrements('id');
            //email
            $table->string('email', 150);
            //密碼
            $table->string('password', 60);
            //使用者權限
            //A 管理員
            //G 一般會員
            $table->string('type', 1)->default('G');
            //暱稱
            $table->string('nickname', 50);
            //時間戳記
            $table->timestamps();
            //鍵值索引
            $table->unique(['email'], 'user_enail_uk');
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
