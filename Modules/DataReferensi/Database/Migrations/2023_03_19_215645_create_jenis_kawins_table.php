<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateJenisKawinsTable extends Migration { public function up() { Schema::create("\152\x65\x6e\x69\163\x5f\x6b\x61\167\x69\156\163", function (Blueprint $table) { goto Xfbao; Ef58p: $table->string("\156\141\x6d\x61"); goto nVhLn; nVhLn: $table->timestamps(); goto qoZNl; Xfbao: $table->id(); goto Ef58p; qoZNl: }); } public function down() { Schema::dropIfExists("\x6a\x65\x6e\x69\163\x5f\x6b\x61\167\x69\156\163"); } }
