<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateLokasisTable extends Migration { public function up() { Schema::create("\154\x6f\x6b\x61\163\x69\x73", function (Blueprint $table) { goto bcmFh; DVLT6: $table->string("\x6e\x61\155\141"); goto wMqS7; wMqS7: $table->string("\x6b\x6f\144\x65\137\143\145\x70\141\x74")->nullable(); goto vId4p; ygT6y: $table->string("\x6a\x65\156\151\x73\x5f\x6b\141\x62\165\x70\x61\x74\145\156")->nullable(); goto XcZOZ; bcmFh: $table->uuid("\151\x64")->primary(); goto DVLT6; PK8C0: $table->string("\x69\142\165\137\153\157\164\141")->nullable(); goto cAVxM; cAVxM: $table->char("\153\x61\156\x72\145\x67\x5f\x69\144", 2)->nullable(); goto dGyPH; Psvqj: $table->timestamps(); goto Fxbaa; vId4p: $table->string("\x6a\x65\x6e\x69\163")->nullable(); goto ygT6y; XcZOZ: $table->string("\x6a\x65\x6e\x69\163\137\144\x65\x73\141"); goto PK8C0; dGyPH: $table->uuid("\x6c\x6f\153\141\x73\151\137\151\x64")->nullable(); goto Psvqj; Fxbaa: }); } public function down() { Schema::dropIfExists("\154\157\x6b\141\163\151\163"); } }
