<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateSubLayanansTable extends Migration { public function up() { Schema::create("\x73\165\x62\137\154\141\x79\141\156\x61\x6e\x73", function (Blueprint $table) { goto IjcZQ; jCq52: $table->timestamps(); goto DldFh; IjcZQ: $table->id(); goto Oa1hz; Abzgm: $table->unsignedInteger("\x6c\x61\171\141\x6e\x61\156\x5f\151\144"); goto jCq52; Oa1hz: $table->string("\163\165\142\x5f\154\x61\171\x61\x6e\141\156"); goto Abzgm; DldFh: }); } public function down() { Schema::dropIfExists("\x73\165\x62\137\x6c\x61\x79\x61\x6e\x61\x6e\163"); } }
