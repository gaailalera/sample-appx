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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('controlNumber');
            $table->string('sourceofmail');
            $table->string('subjectMatter');
            $table->string('statuss');
            $table->string('actionUnit');
            $table->date('dateReleased');
            $table->string('nameofpersonnel');
            $table->string('initialReceived');
            $table->string('trackingNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
