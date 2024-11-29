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
        Schema::table('produits', function (Blueprint $table) {
            $table->unsignedBigInteger("sous_category_id")->nullable();
            $table->unsignedBigInteger("sous_categorie_id")->nullable();
            $table->unsignedBigInteger("marque_id")->nullable();

            $table->integer("taille")->nullable();
            $table->boolean('valable')->default(false);
            $table->boolean('cmd')->default(false);
            $table->boolean('vo')->default(false);
            $table->boolean('livrable')->default(false);
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produits', function (Blueprint $table) {
            $table->dropColumn('sous_category_id');
            $table->dropColumn('sous_categorie_id');
            $table->dropColumn('marque_id');

  

        });
    }
};
