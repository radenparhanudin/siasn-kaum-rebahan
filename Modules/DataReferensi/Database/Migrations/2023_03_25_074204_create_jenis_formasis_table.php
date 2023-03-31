<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateJenisFormasisTable extends Migration { public function up() { Schema::create("\152\145\x6e\151\x73\137\146\157\x72\155\x61\x73\151\x73", function (Blueprint $table) { goto z_eRv; z_eRv: $table->char("\x69\x64", 4)->primary(); goto Cfzmb; IGcbO: $table->timestamps(); goto XayfI; sF_YF: $table->char("\x6a\x65\x6e\x69\x73\137\x70\145\x6e\x67\141\144\141\141\156\x5f\151\x64", 2); goto IGcbO; Cfzmb: $table->text("\x6e\x61\155\141"); goto sF_YF; XayfI: }); } public function down() { Schema::dropIfExists("\x6a\x65\156\151\x73\137\146\x6f\x72\x6d\x61\163\151\x73"); } }
