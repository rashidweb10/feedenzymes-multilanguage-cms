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
        foreach (getLanguageList() as $lang => $langName) {
            Schema::create("{$lang}_news", function (Blueprint $table) use ($lang) {
                $table->id();
                $table->string('name');
                $table->string('image')->nullable();
                $table->longText('contents')->nullable();
                $table->timestamps();
            });
        } 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('news');
        foreach (getLanguageList() as $lang => $langName) {
            Schema::dropIfExists("{$lang}_news");
        }         
    }
};