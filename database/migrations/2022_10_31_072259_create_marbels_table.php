<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarbelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marbels', function (Blueprint $table) {
            $table->id();
            $table->string('mcat_id');
            $table->string('mcat_room_id');
            $table->string('marbel_name');
            $table->string('marbel_title');
            $table->longText('long_desp');
            $table->string('marbel_photo')->nullable();
            $table->string('thumbnail')->nullable();
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
        Schema::dropIfExists('marbels');
    }
}
