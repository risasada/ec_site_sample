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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price')->comment('価格');
            $table->string('gender')->commet('性別');
            $table->string('categories')->commet('カテゴリー');
            $table->string('designers')->commet('ブランド');
            $table->string('made_in')->commet('生産地');
            $table->string('material')->commet('素材');
            $table->integer('XS')->default(0)->commet('在庫');
            $table->integer('S')->default(0)->commet('在庫');
            $table->integer('M')->default(0)->commet('在庫');
            $table->integer('L')->default(0)->commet('在庫');
            $table->integer('LL')->default(0)->commet('在庫');
            $table->string('img_url1');
            $table->string('img_url2');
            $table->string('img_url3');
            $table->string('img_url4');
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
        Schema::dropIfExists('items');
    }
};
