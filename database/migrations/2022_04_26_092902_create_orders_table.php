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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('お客様番号');
            $table->string('user_name')->comment('ユーザー名');
            $table->string('last_name')->comment('苗字');
            $table->string('first_name')->comment('名前');
            $table->string('post_number')->comment('郵便番号');
            $table->text('address')->comment('住所');
            $table->integer('phone')->comment('電話番号');
            $table->integer('item_id')->comment('商品番号');
            $table->string('item_name')->comment('商品名');
            $table->string('size')->comment('サイズ');
            $table->string('designers')->comment('ブランド名');
            $table->string('categories')->comment('カテゴリー');
            $table->integer('price')->comment('値段');
            $table->string('shipping_status')->default('未発送')->comment('配送状況');
            $table->string('arrival_date')->default('未定')->comment('到着予定日');
            $table->string('shipping_company')->default('未定')->comment('配送会社');
            $table->string('shipping_id')->default('未定')->comment('配送ID');
            $table->text('message_from_customer')->default('特に無し')->comment('お客様からの備考');

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
        Schema::dropIfExists('orders');
    }
};
