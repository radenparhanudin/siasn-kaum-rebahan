<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateJenisPengadaansTable extends Migration { public function up() { Schema::create("\152\145\x6e\151\x73\x5f\160\145\x6e\x67\141\x64\x61\141\x6e\x73", function (Blueprint $table) { goto Ih8qc; pyYXc: $table->string("\156\x61\155\141"); goto YkNHx; YkNHx: $table->integer("\155\151\156\137\165\163\151\141")->default(0); goto E_pQY; GxiId: $table->boolean("\163\x74\x61\x74\x75\x73")->nullable(); goto mrgyp; mrgyp: $table->timestamps(); goto yT6vU; E_pQY: $table->integer("\155\x61\x78\x5f\165\x73\x69\x61")->default(0); goto GxiId; Ih8qc: $table->char("\151\x64", 2)->primary(); goto pyYXc; yT6vU: }); } public function down() { Schema::dropIfExists("\x6a\x65\x6e\x69\163\x5f\x70\x65\156\x67\x61\144\x61\141\x6e\163"); } }
