<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id(); 

            $table->string('nomePaciente');     
            $table->date('data');              
            $table->time('hora');              
            $table->string('procedimento');     
            $table->string('status');          
            $table->string('email')->nullable();
            $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
