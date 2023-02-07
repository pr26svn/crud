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
        Schema::create('news_companies', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("prevew_text");
            $table->string("prevew_img");
            $table->text("detile_text");
            $table->string("detile_img");
            $table->boolean("active");
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
        Schema::dropIfExists('news_companies');
    }
};
