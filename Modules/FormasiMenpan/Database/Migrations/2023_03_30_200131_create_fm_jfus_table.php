<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateFmJfusTable extends Migration { public function up() { Schema::create("\x66\x6d\x5f\x6a\x66\x75\163", function (Blueprint $table) { goto hhu0V; aXDFT: $table->string("\x6a\x61\142\141\x74\x61\x6e"); goto dSkHi; hhu0V: $table->uuid("\151\144")->primary(); goto aXDFT; dSkHi: $table->timestamps(); goto D4Ppo; D4Ppo: }); } public function down() { Schema::dropIfExists("\146\x6d\137\152\x66\x75\x73"); } }
