<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateUnitOrganisasisTable extends Migration { public function up() { Schema::create("\x75\156\x69\164\137\157\162\147\x61\x6e\x69\x73\x61\163\151\x73", function (Blueprint $table) { goto Gaid3; kkDAb: $table->uuid("\x69\x6e\163\164\141\156\163\151\x5f\151\144"); goto cJ9Hv; ATq2e: $table->text("\x6e\141\x6d\x61\x5f\152\141\x62\141\x74\141\x6e"); goto qZ31r; ijLUq: $table->timestamps(); goto Ev3Ru; Gaid3: $table->uuid("\x69\144")->primary(); goto kkDAb; qZ31r: $table->char("\x65\163\x65\x6c\157\x6e\x5f\x69\x64", 2)->nullable(); goto ijLUq; cJ9Hv: $table->text("\x6e\141\155\x61\x5f\165\x6e\x6f\162"); goto ATq2e; Ev3Ru: }); } public function down() { Schema::dropIfExists("\x75\156\151\x74\137\157\162\x67\x61\156\151\x73\141\x73\x69\163"); } }
