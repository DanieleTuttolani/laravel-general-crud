<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*
    nome
    nascita
    sesso
    età
    proveninenza
    cod fiscale 
    id documento
    data di stampa

    -------------
    piastrine 
    globuli bianchi 
    globuli rossi
    emoglobina

    ematocrito
    volume cellula medio
    contenuto cellula medio Hb
    concentrazione cellulare media 
    ampiezza media disturb G.R
    volume medio piastrinico 
    emazie ipocromiche 

    ALT (SGPT)
    */
    public function up(): void
    {
        Schema::create('guests_main_lable', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests_main_lable');
    }
};
