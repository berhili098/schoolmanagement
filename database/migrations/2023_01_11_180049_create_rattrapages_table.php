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
        Schema::create('rattrapages', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->bigInteger('salle_id')->unsigned()->index();
            $table->bigInteger('groupe_id')->unsigned()->index();
            $table->bigInteger('module_id')->unsigned()->index();
            $table->foreign('salle_id')->references('id')->on('salles')->onDelete('cascade');
            $table->foreign('groupe_id')->references('id')->on('groupes')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
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
        Schema::dropIfExists('rattrapages');
    }
};
