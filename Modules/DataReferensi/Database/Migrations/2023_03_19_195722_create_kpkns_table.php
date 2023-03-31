<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateKpknsTable extends Migration { public function up() { Schema::create("\x6b\x70\x6b\x6e\x73", function (Blueprint $table) { goto xtjT2; AKVLU: $table->string("\x6b\x6f\144\x65\x5f\x63\145\160\x61\x74")->nullable(); goto Cd64G; xtjT2: $table->uuid("\151\x64")->primary(); goto xKlC3; Cd64G: $table->timestamps(); goto UaokN; xKlC3: $table->string("\x6e\x61\x6d\x61"); goto AKVLU; UaokN: }); } public function down() { Schema::dropIfExists("\153\160\x6b\x6e\163"); } }
