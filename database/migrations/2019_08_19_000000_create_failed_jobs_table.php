<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema; class CreateFailedJobsTable extends Migration { public function up() { Schema::create("\x66\x61\x69\154\x65\x64\x5f\x6a\x6f\142\x73", function (Blueprint $table) { goto aDgo4; aDgo4: $table->id(); goto WKJvi; O1VXc: $table->longText("\x65\x78\x63\x65\160\x74\x69\x6f\156"); goto pjd5g; JxhMu: $table->longText("\x70\141\x79\154\157\x61\x64"); goto O1VXc; iiG81: $table->text("\143\157\156\x6e\x65\x63\164\151\157\x6e"); goto VWawV; VWawV: $table->text("\161\x75\x65\x75\x65"); goto JxhMu; pjd5g: $table->timestamp("\x66\141\x69\154\x65\144\x5f\141\x74")->useCurrent(); goto bOfqk; WKJvi: $table->string("\x75\165\151\x64")->unique(); goto iiG81; bOfqk: }); } public function down() { Schema::dropIfExists("\x66\x61\x69\154\145\144\x5f\152\x6f\x62\163"); } }
