<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Entities; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Factories\HasFactory; class DokumenPengadaan extends Model { use HasFactory; protected $guarded = []; public function jenis_formasi() { return $this->belongsTo(JenisFormasi::class); } }
