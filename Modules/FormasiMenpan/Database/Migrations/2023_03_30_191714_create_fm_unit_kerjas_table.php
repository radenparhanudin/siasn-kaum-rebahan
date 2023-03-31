<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateFmUnitKerjasTable extends Migration { public function up() { Schema::create("\x66\155\x5f\x75\156\151\164\137\x6b\145\x72\152\141\163", function (Blueprint $table) { goto yT6TC; LExWf: $table->boolean("\163\x74\141\164\x75\x73"); goto wTI0L; Nfi4d: $table->text("\153\145\164\145\x72\x61\x6e\147\141\x6e"); goto LExWf; TdPkJ: $table->text("\x6e\141\x6d\x61"); goto hF7o8; yT6TC: $table->string("\x69\144")->primary(); goto TdPkJ; hF7o8: $table->text("\141\154\x61\155\141\164"); goto IXdOC; IXdOC: $table->string("\164\145\154\x65\160\157\x6e"); goto Nfi4d; wTI0L: $table->timestamps(); goto JHiTy; JHiTy: }); } public function down() { Schema::dropIfExists("\146\155\x5f\x75\x6e\151\164\137\x6b\x65\x72\x6a\141\x73"); } }
