<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateJfusTable extends Migration { public function up() { Schema::create("\x6a\x66\165\x73", function (Blueprint $table) { goto GOo42; aefoU: $table->timestamps(); goto XDMFc; Zm_lA: $table->string("\156\x61\x6d\x61"); goto KgM2R; KgM2R: $table->string("\153\157\144\145\x5f\143\145\x70\141\164")->nullable(); goto aefoU; GOo42: $table->uuid("\151\x64")->primary(); goto Zm_lA; XDMFc: }); } public function down() { Schema::dropIfExists("\152\x66\x75\163"); } }
