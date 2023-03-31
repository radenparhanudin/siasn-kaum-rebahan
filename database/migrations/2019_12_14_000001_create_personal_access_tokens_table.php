<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema; class CreatePersonalAccessTokensTable extends Migration { public function up() { Schema::create("\x70\145\162\x73\157\x6e\141\154\x5f\x61\143\x63\145\x73\163\137\x74\157\153\145\156\x73", function (Blueprint $table) { goto QIwyu; eYPhU: $table->text("\x61\x62\x69\x6c\151\164\x69\145\163")->nullable(); goto rBPRq; QIwyu: $table->uuid("\x69\144")->primary(); goto Y1G5n; zV8t6: $table->string("\x74\157\x6b\x65\x6e", 64)->unique(); goto eYPhU; Y1G5n: $table->uuidMorphs("\x74\x6f\x6b\x65\x6e\x61\142\154\145"); goto slhsZ; CweR5: $table->timestamps(); goto d51l4; slhsZ: $table->string("\x6e\141\155\x65"); goto zV8t6; rBPRq: $table->timestamp("\x6c\141\163\164\x5f\165\x73\145\144\137\141\x74")->nullable(); goto CweR5; d51l4: }); } public function down() { Schema::dropIfExists("\160\x65\162\x73\x6f\156\x61\154\x5f\141\x63\143\x65\x73\163\x5f\x74\157\x6b\x65\x6e\x73"); } }
