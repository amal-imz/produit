<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cin',200);
            $table->string('nom',200);
            $table->string('prenom',200);
            $table->string('type',200);
            $table->string('produit',200);
            $table->string('tel',200);
            $table->string('mesage',200);
            $table->timestamps();
            $table->string('photo')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objets');
    }
}
