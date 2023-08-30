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
        Schema::table('suivres', function (Blueprint $table) {
            $table->renameColumn('etdiant_id','etudiant_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('suivres', function (Blueprint $table) {
            $table->renameColumn('etudiant_id','etdiant_id');
        });
    }
};
