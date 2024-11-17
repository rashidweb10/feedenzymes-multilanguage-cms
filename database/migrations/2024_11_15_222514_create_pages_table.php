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
        // Schema::create('en_pages', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('image')->nullable();            
        //     $table->longText('contents')->nullable();            
        //     $table->timestamps();
        // });       
        // Loop through each language and create a table
        foreach (getLanguageList() as $lang => $langName) {
            Schema::create("{$lang}_pages", function (Blueprint $table) use ($lang) {
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
        //Schema::dropIfExists('pages');
        foreach (getLanguageList() as $lang => $langName) {
            Schema::dropIfExists("{$lang}_pages");
        }        
    }
};
