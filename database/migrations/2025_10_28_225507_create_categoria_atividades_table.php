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
        Schema::create('categoria_atividades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('trabalho', 100);
            $table->string('estudo', 100);
            $table->string('pessoal', 100);
            $table->string('hobby', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_atividades');
    }
};
