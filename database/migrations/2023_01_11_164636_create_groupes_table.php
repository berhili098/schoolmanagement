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
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fi_id')->unsigned()->index();
            $table->bigInteger('en_id')->unsigned()->index();
            $table->foreign('fi_id')->references('id')->on('filieres')->onDelete('cascade');
            $table->foreign('en_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('section');
            $table->integer('type');
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
        Schema::dropIfExists('groupes');
    }
};
