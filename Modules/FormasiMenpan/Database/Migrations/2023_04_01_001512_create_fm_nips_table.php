<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateFmNipsTable extends Migration { public function up() { Schema::create("\x66\x6d\x5f\156\151\x70\x73", function (Blueprint $table) { goto W0AnN; h4qmc: $table->string("\x6e\x61\x6d\141")->nullable(); goto n1ZeL; zAFxa: $table->integer("\142\x75\x70")->default(0); goto igBJc; mNApA: $table->char("\x6e\151\x70", 18)->nullable(); goto h4qmc; igBJc: $table->boolean("\x76\141\x6c\x69\144\141\x73\x69"); goto VDucI; VDucI: $table->timestamps(); goto ZULbo; W0AnN: $table->uuid("\151\144")->primary(); goto wueve; wueve: $table->uuid("\146\x6d\x5f\163\164\x72\165\153\x74\165\x72\137\152\141\x62\141\164\x61\x6e\x5f\x69\x64"); goto mNApA; n1ZeL: $table->string("\x73\x74\x61\164\165\x73\137\x70\x65\147\x61\x77\141\x69", 4)->nullable(); goto zAFxa; ZULbo: }); } public function down() { Schema::dropIfExists("\x66\155\137\x6e\151\x70\x73"); } }
