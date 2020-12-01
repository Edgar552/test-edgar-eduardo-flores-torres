<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->BigInteger('id_empresa',true);
            $table->string('razon_social')->unique();
            $table->string('rfc')->unique();
            $table->string('nombre_comercial')->unique();
            $table->string('direccion');
            $table->double('telefono');
            $table->softDeletes();
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
        Schema::dropIfExists('empresas');
    }
}
