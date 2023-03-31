<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreatePendidikansTable extends Migration { public function up() { Schema::create("\x70\145\156\x64\x69\144\151\153\141\156\x73", function (Blueprint $table) { goto LA8xZ; l7kKr: $table->char("\x74\x69\156\147\x6b\141\164\137\160\145\x6e\x64\x69\x64\x69\x6b\x61\156\137\151\144", 2); goto AvMUd; LA8xZ: $table->uuid("\151\x64")->primary(); goto HW3eS; qdGWo: $table->timestamps(); goto vlyff; HW3eS: $table->string("\x6e\141\x6d\141"); goto RReH_; RReH_: $table->string("\x6b\157\144\x65\137\143\x65\x70\x61\164")->nullable(); goto l7kKr; AvMUd: $table->string("\163\164\x61\164\x75\x73")->nullable(); goto qdGWo; vlyff: }); } public function down() { Schema::dropIfExists("\160\x65\156\144\151\x64\151\153\x61\x6e\x73"); } }
