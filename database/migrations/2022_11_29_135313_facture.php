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
        Schema::create('facture', function (Blueprint $table) {
            $table->id();
            $table->char('type');
            $table->date('date');
            $table->char('nom');
            $table->integer('prix_ht'); // utile si c'est une facture d'achat
            $table->unsignedBigInteger('id_taxe');
            $table->timestamps();

            $table->foreign('id_taxe')->references('id')->on('taxe')->onDelete('cascade');
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
