<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cin',150);
            $table->string('nom',150);
            $table->string('prenom',150);
            $table->string('type',150);
            $table->string('produit',150);
            $table->string('tel',150);
            $table->string('mesage',150);
            $table->timestamps();
            $table->string('photo')->nullable();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /* Schema::dropIfExists('cvs');*/
    }
}
