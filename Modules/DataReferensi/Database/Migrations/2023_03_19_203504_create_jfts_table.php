<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateJftsTable extends Migration { public function up() { Schema::create("\152\x66\x74\x73", function (Blueprint $table) { goto pgm4J; mdVA5: $table->string("\x6b\x6f\144\x65\137\x63\145\x70\141\164")->nullable(); goto eQZY9; lnMUF: $table->uuid("\x6b\x65\154\x6f\155\160\157\x6b\x5f\152\x61\142\x61\164\x61\156\x5f\151\x64")->nullable(); goto M6u74; pgm4J: $table->uuid("\x69\x64")->primary(); goto U3WIp; M6u74: $table->timestamps(); goto enAtL; eQZY9: $table->integer("\164\x75\156\x6a\141\x6e\x67\x61\x6e\x5f\152\x61\x62\141\x74\x61\x6e")->default(0); goto SqpMH; SqpMH: $table->integer("\142\x75\160")->default(0); goto lnMUF; U3WIp: $table->string("\x6e\x61\x6d\x61"); goto mdVA5; enAtL: }); } public function down() { Schema::dropIfExists("\152\x66\164\x73"); } }
