<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateSatuanKerjasTable extends Migration { public function up() { Schema::create("\x73\x61\x74\165\x61\156\137\x6b\145\x72\x6a\141\x73", function (Blueprint $table) { goto FMXKJ; qkix5: $table->string("\x6b\141\x6e\x72\x65\147\137\x69\x64")->nullable(); goto QRqqR; U9XAU: $table->string("\152\145\x6e\x69\x73\x5f\163\141\164\165\x61\x6e\137\x6b\x65\162\x6a\x61\x5f\x69\x64")->nullable(); goto qkix5; tXNxd: $table->uuid("\151\x6e\x73\164\x61\156\163\x69\x5f\x69\144"); goto ti2Rd; DFebb: $table->uuid("\x6c\157\x6b\141\x73\x69\x5f\x69\x64")->nullable(); goto U9XAU; FMXKJ: $table->uuid("\x69\144"); goto NTuA2; NTuA2: $table->string("\x6e\141\155\141"); goto tXNxd; QRqqR: $table->timestamps(); goto lkY8E; ti2Rd: $table->uuid("\x70\141\x72\x65\x6e\164\x5f\151\144"); goto DFebb; lkY8E: }); } public function down() { Schema::dropIfExists("\163\141\164\165\141\156\137\x6b\x65\162\x6a\x61\x73"); } }
