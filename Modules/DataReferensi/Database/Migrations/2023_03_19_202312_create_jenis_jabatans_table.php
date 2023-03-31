<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateJenisJabatansTable extends Migration { public function up() { Schema::create("\x6a\x65\x6e\x69\x73\137\x6a\x61\x62\x61\164\x61\x6e\163", function (Blueprint $table) { goto TPMBI; T2y5M: $table->string("\x6e\x61\x6d\141"); goto mg1kf; mg1kf: $table->timestamps(); goto j8QXO; TPMBI: $table->id(); goto T2y5M; j8QXO: }); } public function down() { Schema::dropIfExists("\x6a\x65\x6e\151\163\x5f\x6a\x61\x62\141\164\x61\x6e\x73"); } }
