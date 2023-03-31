<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateFmJftsTable extends Migration { public function up() { Schema::create("\x66\x6d\x5f\152\x66\x74\163", function (Blueprint $table) { goto h4Hqh; h4Hqh: $table->uuid("\x69\x64")->primary(); goto j7G3g; uG5RL: $table->timestamps(); goto AgGiQ; GrUmT: $table->string("\x64\x65\163\153\x72\x69\160\x73\151"); goto uG5RL; j7G3g: $table->string("\x6a\x61\x62\141\x74\x61\156"); goto GrUmT; AgGiQ: }); } public function down() { Schema::dropIfExists("\146\x6d\x5f\152\146\164\x73"); } }
