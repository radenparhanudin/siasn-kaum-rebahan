<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateAlasanTolakPengadaansTable extends Migration { public function up() { Schema::create("\141\154\141\163\141\x6e\x5f\x74\157\x6c\x61\x6b\137\x70\x65\x6e\x67\141\x64\x61\141\156\163", function (Blueprint $table) { goto KCE7P; RiGqM: $table->string("\x6b\145\164\x65\162\x61\156\147\x61\x6e"); goto Aojx6; Aojx6: $table->timestamps(); goto WslEh; SM4U3: $table->text("\141\154\x61\163\141\156"); goto RiGqM; KCE7P: $table->id(); goto m_v7J; m_v7J: $table->unsignedInteger("\x6c\141\x79\x61\156\x61\156\137\151\x64"); goto SM4U3; WslEh: }); } public function down() { Schema::dropIfExists("\141\154\x61\x73\141\156\x5f\164\157\154\141\x6b\137\160\x65\x6e\147\141\x64\141\141\156\163"); } }
