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
            $table->string('name');
            $table->string('logo');
            $table->string('hero');
            $table->string('favicon');
            $table->string('slogan');
            $table->string('visitors');
            $table->string('event');
            $table->string('venue');
            $table->string('telephone1', 15);
            $table->string('telephone2', 15)->nullable();
            $table->string('email');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->text('open_hours');
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
