<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientmoralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientmorals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomentreprise');
            $table->string('adresseentreprise');
            $table->string('raisonsocial');
            $table->string('numident');
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
        Schema::dropIfExists('clientmorals');
    }
}
