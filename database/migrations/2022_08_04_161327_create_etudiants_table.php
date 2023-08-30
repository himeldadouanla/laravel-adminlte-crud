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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('niveau_id')->constrained('niveaux');
            $table->foreignId('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_de_naissance');
            $table->integer('telephone');
            $table->string('email');
            $table->date('annee_scolaire');
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
        Schema::dropIfExists('etudiants');
            $table->dropForeign(['niveau_id']);

    }
};
