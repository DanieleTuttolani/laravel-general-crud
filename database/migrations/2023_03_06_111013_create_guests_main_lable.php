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
            $table->string('name', 150);
            $table->date('born' );
            $table->enum('gender', ['M' , 'F']);
            $table->integer('age', 150);
            $table->string('from', 80);
            $table->char('CF', 16 );
            $table->date('printing-date');
            $table->float('piastrine', 3 , 1);
            $table->float('GB', 3 , 1);
            $table->float('GR', 3 , 1);
            $table->float('EMO', 3 , 1);
            $table->float('EMA', 3 , 1);
            $table->float('VCM', 3 , 1);
            $table->float('CCM', 3 , 1);
            $table->float('CMC', 3 , 1);
            $table->float('AMD', 3 , 1);
            $table->float('VMP', 3 , 1);
            $table->float('EMI', 3 , 1);
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
