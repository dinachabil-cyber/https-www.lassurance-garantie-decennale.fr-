<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lassurance-garantie-decennal', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 255)->nullable();
            $table->string('prenom', 255)->nullable();
            $table->string('raison', 255)->nullable();
            $table->string('activite', 255)->nullable();
            $table->string('ancienne', 255)->nullable();
            $table->string('ancien_resil', 255)->nullable();
            $table->string('motif', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('telephone', 255)->nullable();
            $table->dateTime('date_prospect')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lassurance-garantie-decennal');
    }
};
