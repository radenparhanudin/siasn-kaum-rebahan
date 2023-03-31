<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateStatusUsulansTable extends Migration { public function up() { Schema::create("\163\164\x61\x74\x75\163\x5f\165\163\x75\154\x61\156\x73", function (Blueprint $table) { goto sKZC6; I5qFQ: $table->string("\156\141\155\x61"); goto cfGAF; sKZC6: $table->id(); goto I5qFQ; cfGAF: $table->timestamps(); goto N0YCc; N0YCc: }); } public function down() { Schema::dropIfExists("\x73\x74\x61\x74\x75\163\x5f\165\x73\x75\154\141\x6e\163"); } }
