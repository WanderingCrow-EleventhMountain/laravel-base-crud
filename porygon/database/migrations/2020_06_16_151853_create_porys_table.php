<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porys', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo');
            $table->integer('altezza');
            $table->integer('peso');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pory');
    }
}
