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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('app_logo');
            $table->string('timezone');
            $table->string('author_name');
            $table->string('author_link');
            $table->string('ui_mode');
            $table->string('sidebar_collapse');
            $table->longText('phone')->nullable();
            $table->longText('whatsapp_phone')->nullable();
            $table->longText('google_map')->nullable();
            $table->longText('email')->nullable();
            $table->longText('address')->nullable();
            $table->longText('about')->nullable();
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
        Schema::dropIfExists('settings');
    }
};