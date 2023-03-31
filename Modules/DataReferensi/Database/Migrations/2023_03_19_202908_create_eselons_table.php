<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateEselonsTable extends Migration { public function up() { Schema::create("\x65\x73\x65\x6c\x6f\156\x73", function (Blueprint $table) { goto bcKEd; rIpAc: $table->char("\x67\x6f\154\x5f\x74\145\x72\x65\x6e\x64\x61\x68\x5f\151\x64", 2)->nullable(); goto cnrL8; maJ13: $table->string("\145\x73\145\x6c\157\x6e\137\x6c\145\x76\x65\x6c\x5f\151\144")->nullable(); goto sm6M8; UMzhz: $table->string("\x6e\141\x6d\x61")->nullable(); goto QxGCP; cnrL8: $table->char("\x67\157\x6c\137\164\145\x72\164\x69\x6e\147\147\x69\137\151\x64", 2)->nullable(); goto maJ13; sm6M8: $table->string("\x61\x73\156\x5f\152\x65\x6e\x6a\x61\x6e\x67\x5f\x6a\x61\142\x61\164\x61\156\x5f\151\144")->nullable(); goto VnhlR; bcKEd: $table->char("\x69\144", 2)->primary(); goto UMzhz; QxGCP: $table->string("\x6a\x61\142\141\x74\141\156\137\141\163\x6e")->nullable(); goto rIpAc; VnhlR: $table->timestamps(); goto F84xy; F84xy: }); } public function down() { Schema::dropIfExists("\x65\x73\x65\x6c\157\x6e\x73"); } }
