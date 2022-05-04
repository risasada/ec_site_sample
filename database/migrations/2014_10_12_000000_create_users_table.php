<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ユーザー名');
            $table->string('email')->unique()->comment('メール');
            $table->timestamp('email_verified_at')->nullable()->comment('弄ると危険');
            $table->string('password')->comment('弄ると危険');
            $table->rememberToken()->comment('弄ると危険');
            $table->string('last_name')->nullable()->comment('苗字');
            $table->string('first_name')->nullable()->comment('名前');
            $table->string('country')->nullable()->comment('国');
            $table->string('ken')->nullable()->comment('県');
            $table->string('shikutyoson')->nullable()->comment('市区町村');
            $table->integer('post_number')->nullable()->comment('郵便番号');
            $table->integer('phone')->nullable();
            $table->boolean('mail_status')->nullable()->comment('メール購買状況');
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
};
