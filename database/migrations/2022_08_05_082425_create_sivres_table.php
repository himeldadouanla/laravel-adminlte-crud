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
        Schema::create('sivres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etdiant_id')->constrained('etudiants');
            $table->foreignId('u_e_id')->constrained('u_es');
            $table->string('duree');
            $table->date('date');
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
        Schema::dropIfExists('sivres');
        $table->dropForeign(['etudiant_id']);
        $table->dropForeign(['u_e_id']);
    }
};
