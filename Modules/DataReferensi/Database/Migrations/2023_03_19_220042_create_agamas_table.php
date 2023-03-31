<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateAgamasTable extends Migration { public function up() { Schema::create("\141\x67\x61\x6d\x61\163", function (Blueprint $table) { goto Rrn9j; sb1ly: $table->timestamps(); goto qeLpO; Rrn9j: $table->id(); goto OZ2GH; OZ2GH: $table->string("\156\x61\x6d\x61"); goto sb1ly; qeLpO: }); } public function down() { Schema::dropIfExists("\141\147\x61\x6d\141\x73"); } }
