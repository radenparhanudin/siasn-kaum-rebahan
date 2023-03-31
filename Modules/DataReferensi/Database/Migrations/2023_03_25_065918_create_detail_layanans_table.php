<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateDetailLayanansTable extends Migration { public function up() { Schema::create("\x64\145\x74\141\x69\154\x5f\154\141\171\x61\x6e\x61\156\163", function (Blueprint $table) { goto xJSVJ; MXsRh: $table->timestamps(); goto H3N7h; Vd8UM: $table->unsignedInteger("\163\x75\x62\137\154\141\x79\x61\x6e\x61\156\x5f\x69\x64"); goto MXsRh; xJSVJ: $table->id(); goto r3gos; idQQ2: $table->unsignedInteger("\154\141\171\x61\x6e\141\156\137\151\x64"); goto Vd8UM; r3gos: $table->text("\144\145\164\x61\x69\x6c\x5f\x6c\x61\x79\141\156\141\x6e"); goto idQQ2; H3N7h: }); } public function down() { Schema::dropIfExists("\144\x65\x74\141\151\x6c\x5f\154\x61\171\x61\x6e\141\156\163"); } }
