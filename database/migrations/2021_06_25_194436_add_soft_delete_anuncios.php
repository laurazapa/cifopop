<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDeleteAnuncios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        //añadir la columna para el soft delete
        Schema::table('anuncios', function(Blueprint $table){
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        //eliminar la columna para el softdelete   
        Schema::table('anuncios', function(Blueprint $table){
            $table->dropColumn('deleted_at');
        });
    }
}
