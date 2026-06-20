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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('phone')->nullable();

            // invitation pdf
            $table->string('invitation_pdf')->nullable();

            // en_attente | present | absent
            $table->enum('status', [
                'pending',
                'present',
                'absent'
            ])->default('pending');

            $table->text('comment')->nullable();

            // date de réponse
            $table->timestamp('responded_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
