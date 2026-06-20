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
        Schema::create('settings', function (Blueprint $table) {

            $table->id();
            $table->string('groom_name')->nullable();
            $table->string('bride_name')->nullable();
            $table->string('hall_name')->nullable();
            $table->string('hall_address')->nullable();

            // lien Google Maps
            $table->text('maps_url')->nullable();

            // date mariage
            $table->date('marriage_date')->nullable();

            // heure
            $table->time('marriage_time')->nullable();
            
            // image bannière
            $table->string('banner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
