<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('produits_facture', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prod');
            $table->unsignedBigInteger('id_fv');
            $table->integer('quantite');
            $table->timestamps();

            $table->foreign('id_prod')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('id_fv')->references('id')->on('facture_vente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
    }
};
