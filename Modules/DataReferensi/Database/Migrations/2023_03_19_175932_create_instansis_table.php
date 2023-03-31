<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateInstansisTable extends Migration { public function up() { Schema::create("\x69\156\163\164\x61\156\163\x69\163", function (Blueprint $table) { goto vObDJ; qOjXL: $table->string("\152\x65\x6e\151\163\137\151\156\x73\x74\141\x6e\x73\151\x5f\151\144")->nullable(); goto t2Z_B; vObDJ: $table->uuid("\151\144")->primary(); goto e19cD; O39BN: $table->string("\x73\x74\x61\164\165\163")->nullable(); goto L8snv; z9tK1: $table->string("\152\x65\156\x69\x73")->nullable(); goto O39BN; m654T: $table->string("\156\x61\x6d\x61\137\152\141\142\141\x74\x61\x6e")->nullable(); goto LWbxU; bY8AY: $table->text("\156\141\155\x61\137\x62\141\x72\x75")->nullable(); goto m654T; t2Z_B: $table->uuid("\x6c\157\153\141\163\x69\x5f\151\x64")->nullable(); goto z9tK1; L8snv: $table->timestamps(); goto op3im; LWbxU: $table->string("\153\157\144\x65\137\143\x65\160\141\x74")->nullable(); goto qOjXL; e19cD: $table->text("\156\x61\155\x61"); goto bY8AY; op3im: }); } public function down() { Schema::dropIfExists("\x69\156\x73\x74\x61\x6e\x73\151\x73"); } }
