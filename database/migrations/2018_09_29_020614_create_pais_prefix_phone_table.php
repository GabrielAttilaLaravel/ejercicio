<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaisPrefixPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pais_prefix_phone', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('paises');

            $table->unsignedInteger('prefix_phone_id');
            $table->foreign('prefix_phone_id')->references('id')->on('prefixes_phones');

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
        Schema::dropIfExists('pais_prefix_phone');
    }
}
