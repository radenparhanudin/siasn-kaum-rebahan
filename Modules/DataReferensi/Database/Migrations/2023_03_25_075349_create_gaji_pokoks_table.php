<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateGajiPokoksTable extends Migration { public function up() { Schema::create("\147\x61\152\x69\137\x70\157\x6b\x6f\153\x73", function (Blueprint $table) { goto fg331; ZJlaC: $table->integer("\x67\141\152\151\137\160\x6f\x6b\157\153"); goto tsNNP; KsApy: $table->integer("\x6d\x61\163\141\137\153\x65\162\x6a\x61\x5f\147\x6f\154\157\x6e\147\141\x6e")->default(0); goto ZJlaC; tsNNP: $table->year("\164\141\150\x75\x6e\x5f\142\x75\x61\164"); goto yfHjb; BNl52: $table->char("\x67\157\154\157\156\147\141\156\137\x69\x64", 2); goto KsApy; yfHjb: $table->timestamps(); goto nGklJ; fg331: $table->uuid("\x69\x64")->primary(); goto BNl52; nGklJ: }); } public function down() { Schema::dropIfExists("\x67\141\152\151\x5f\x70\x6f\x6b\x6f\153\x73"); } }
