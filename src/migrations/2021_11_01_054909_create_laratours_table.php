<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaratoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laratours', function (Blueprint $table) {
            $table->id();
            $table->longText('element')->nullable();
            $table->longText('title')->nullable();
            $table->longText('content')->nullable();
            $table->longText('placement')->nullable();
            $table->longText('path')->nullable();
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
        Schema::dropIfExists('laratours');
    }
}
