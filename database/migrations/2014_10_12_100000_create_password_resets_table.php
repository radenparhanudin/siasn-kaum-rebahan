<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema; return new class extends Migration { public function up() { Schema::create("\160\141\x73\163\167\157\162\144\137\162\x65\x73\x65\164\163", function (Blueprint $table) { goto RwGhp; RwGhp: $table->string("\145\x6d\141\x69\x6c")->index(); goto JZ71N; JZ71N: $table->string("\x74\157\x6b\x65\156"); goto wbf0v; wbf0v: $table->timestamp("\x63\x72\x65\141\x74\145\144\x5f\141\164")->nullable(); goto YnC24; YnC24: }); } public function down() { Schema::dropIfExists("\x70\x61\163\x73\x77\157\x72\144\x5f\162\145\x73\x65\164\163"); } };
