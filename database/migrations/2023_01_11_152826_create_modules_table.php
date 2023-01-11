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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string("nom_module");
            $table->integer("nb_heure");
            $table->bigInteger("ens_id")->unsigned()->index();
            $table->bigInteger("fil_id")->unsigned()->index();
            $table->bigInteger('sal_id')->unsigned()->index();
            $table->foreign('ens_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('fil_id')->references('id')->on('filieres')->onDelete('cascade');
            $table->foreign('sal_id')->references('id')->on('salles')->onDelete('cascade');
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
        Schema::dropIfExists('modules');
    }
};
