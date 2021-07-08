<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id(); //id, clave primaria auto increment, ve ja per defecte
            $table->string('titulo',255);
            $table->string('descripcion');
            $table->float('precio')->default(0);
            $table->string('imagen',255)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps(); //marcas de tiempo created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('anuncios');
    }
}
