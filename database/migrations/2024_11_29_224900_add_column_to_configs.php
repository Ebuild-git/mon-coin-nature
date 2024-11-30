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
        Schema::table('configs', function (Blueprint $table) {
           $table->string('icone1')->nullable()->default(null);
            $table->string('icone2')->nullable()->default(null);
            $table->string('icone3')->nullable()->default(null);
            $table->string('icone4')->nullable()->default(null);

            $table->string('image1')->nullable()->default(null);
            $table->string('image2')->nullable()->default(null);
            $table->string('image3')->nullable()->default(null);
            $table->string('image4')->nullable()->default(null);
            $table->string('image5')->nullable()->default(null);
            $table->string('image6')->nullable()->default(null); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('configs', function (Blueprint $table) {
         $table->dropColumn('icone1');
        $table->dropColumn('icone2');
        $table->dropColumn('icone3');
        $table->dropColumn('icone4');
        $table->dropColumn('image1');
        $table->dropColumn('image2');
        $table->dropColumn('image3');
        $table->dropColumn('image4');
        $table->dropColumn('image5');
        $table->dropColumn('image6'); 

        });
    }
};
