<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema; class CreateUsersTable extends Migration { public function up() { Schema::create("\x75\163\145\x72\163", function (Blueprint $table) { goto kRFZp; F1KHv: $table->rememberToken(); goto oSqnv; XEq74: $table->string("\146\157\164\157\x5f\160\162\157\146\x69\154\x65")->nullable(); goto F1KHv; kRFZp: $table->uuid("\x69\144")->primary(); goto CcqyY; E5b9F: $table->timestamp("\x65\155\141\x69\x6c\x5f\166\x65\162\151\146\x69\x65\144\x5f\141\164")->nullable(); goto dH4qF; oSqnv: $table->timestamps(); goto r_NMD; dH4qF: $table->string("\x75\163\x65\x72\x6e\x61\155\145")->unique(); goto XEq74; zQnn4: $table->string("\x65\155\x61\x69\x6c")->unique(); goto s8RjP; CcqyY: $table->string("\x6e\141\x6d\x65"); goto zQnn4; s8RjP: $table->string("\x70\x61\163\x73\167\x6f\162\x64")->nullable(); goto E5b9F; r_NMD: }); } public function down() { Schema::dropIfExists("\165\x73\x65\162\163"); } }
