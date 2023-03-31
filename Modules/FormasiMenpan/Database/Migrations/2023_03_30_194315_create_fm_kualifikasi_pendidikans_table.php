<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateFmKualifikasiPendidikansTable extends Migration { public function up() { Schema::create("\146\x6d\x5f\153\165\x61\154\x69\x66\151\153\141\x73\151\x5f\160\x65\x6e\x64\x69\144\x69\153\141\x6e\x73", function (Blueprint $table) { goto hHxDA; B4_Do: $table->string("\141\x6e\152\141\142\137\151\144"); goto oURyv; daz9a: $table->text("\x70\145\x6e\x64\151\x64\x69\x6b\141\156\137\x69\x64"); goto v7l2F; oURyv: $table->text("\x61\156\152\x61\x62\137\x6e\141\155\141"); goto daz9a; AAGXr: $table->timestamps(); goto b2GRL; hHxDA: $table->uuid("\x69\x64")->primary(); goto B4_Do; v7l2F: $table->text("\x70\x65\156\x64\151\x64\151\153\x61\x6e\137\x6e\141\155\x61"); goto AAGXr; b2GRL: }); } public function down() { Schema::dropIfExists("\x66\155\x5f\153\x75\141\x6c\x69\146\151\153\141\163\x69\x5f\x70\x65\156\x64\151\144\x69\153\x61\156\163"); } }
