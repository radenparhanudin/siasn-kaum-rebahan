<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateKedudukanHukumsTable extends Migration { public function up() { Schema::create("\x6b\145\x64\165\x64\x75\153\x61\x6e\137\150\x75\x6b\x75\155\163", function (Blueprint $table) { goto p3WGR; JJ1iy: $table->string("\156\141\155\141"); goto uMsvf; XSUF3: $table->timestamps(); goto vSF2M; zBhK6: $table->string("\153\157\144\x65"); goto XSUF3; uMsvf: $table->string("\141\x74\165\162\x61\x6e"); goto zBhK6; p3WGR: $table->char("\151\x64")->primary(); goto JJ1iy; vSF2M: }); } public function down() { Schema::dropIfExists("\153\x65\144\165\144\165\153\x61\156\x5f\150\x75\153\x75\155\x73"); } }
