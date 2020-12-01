<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->BigInteger('id_contacto',true);
            $table->BigInteger('id_empresa');
            $table->string('correo_electronico');
            $table->double('telefono');
            $table->string('cargo');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_empresa')->references('id_empresa')->on('empresas')->onDelete('cascade');


        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}
