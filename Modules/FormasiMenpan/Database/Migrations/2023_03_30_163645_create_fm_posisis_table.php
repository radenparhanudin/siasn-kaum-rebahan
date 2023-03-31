<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateFmPosisisTable extends Migration { public function up() { Schema::create("\146\155\x5f\x70\157\x73\x69\163\x69\x73", function (Blueprint $table) { goto eKo2n; eKo2n: $table->string("\x69\x64")->primary(); goto ZyUaZ; N9oYH: $table->timestamps(); goto Xfk9e; ZyUaZ: $table->string("\x70\x6f\163\151\x73\151"); goto N9oYH; Xfk9e: }); } public function down() { Schema::dropIfExists("\x66\155\137\160\x6f\x73\151\x73\x69\x73"); } }
