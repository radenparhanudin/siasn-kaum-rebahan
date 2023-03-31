<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateGolongansTable extends Migration { public function up() { Schema::create("\x67\x6f\x6c\157\x6e\x67\x61\156\x73", function (Blueprint $table) { goto jIeb7; lA1om: $table->string("\160\141\156\x67\153\x61\164"); goto BNqkN; jIeb7: $table->char("\x69\x64", 2)->primary(); goto m9uba; BNqkN: $table->timestamps(); goto b_Xgv; m9uba: $table->string("\x6e\x61\155\x61"); goto lA1om; b_Xgv: }); } public function down() { Schema::dropIfExists("\147\157\x6c\x6f\x6e\x67\x61\x6e\163"); } }
