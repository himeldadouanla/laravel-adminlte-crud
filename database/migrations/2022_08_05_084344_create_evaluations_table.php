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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etdiant_id')->constrained('etudiants');
            $table->foreignId('u_e_id')->constrained('u_es');
            $table->date('date');
            $table->string('heure');
            $table->string('duree');
            $table->integer('note');
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
        Schema::dropIfExists('evaluations');
        $table->dropForeign(['etudiant_id']);
        $table->dropForeign(['u_e_id']);
    }
};
