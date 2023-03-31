<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateLayanansTable extends Migration { public function up() { Schema::create("\x6c\x61\x79\141\x6e\141\156\x73", function (Blueprint $table) { goto jCtPA; sWzSB: $table->timestamps(); goto sLyV7; jCtPA: $table->id(); goto y8kJH; y8kJH: $table->string("\154\x61\x79\x61\156\x61\x6e"); goto sWzSB; sLyV7: }); } public function down() { Schema::dropIfExists("\154\x61\171\x61\156\141\x6e\x73"); } }
