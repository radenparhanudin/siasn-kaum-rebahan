<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateDokumenPengadaansTable extends Migration { public function up() { Schema::create("\144\157\x6b\x75\155\145\x6e\137\160\145\x6e\x67\141\144\x61\141\156\163", function (Blueprint $table) { goto Qp5Aw; cE0ME: $table->boolean("\162\145\161\165\x69\x72\x65\x64"); goto D3RwX; D3RwX: $table->string("\146\x69\x6c\145\x5f\164\x79\x70\145"); goto B4Vzd; B4Vzd: $table->timestamps(); goto iTbyN; X_e_M: $table->string("\156\141\x6d\x65"); goto cE0ME; LONiN: $table->char("\x6a\145\x6e\151\163\137\x66\157\162\x6d\141\x73\151\x5f\x69\x64", 4); goto X_e_M; Qp5Aw: $table->id(); goto LONiN; iTbyN: }); } public function down() { Schema::dropIfExists("\x64\157\153\x75\x6d\x65\x6e\x5f\160\x65\156\147\x61\144\x61\x61\x6e\163"); } }
