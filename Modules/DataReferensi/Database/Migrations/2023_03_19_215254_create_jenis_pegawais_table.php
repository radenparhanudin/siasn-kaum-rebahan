<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateJenisPegawaisTable extends Migration { public function up() { Schema::create("\152\145\156\151\x73\x5f\x70\x65\x67\x61\x77\141\x69\163", function (Blueprint $table) { goto LGHPC; hal38: $table->string("\156\141\x6d\x61"); goto tESHW; LGHPC: $table->char("\151\144", 2)->primary(); goto hal38; tESHW: $table->timestamps(); goto hhfJ0; hhfJ0: }); } public function down() { Schema::dropIfExists("\x6a\145\x6e\151\x73\x5f\160\x65\147\x61\167\141\151\163"); } }
