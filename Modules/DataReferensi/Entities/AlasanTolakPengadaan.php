<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Entities; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Factories\HasFactory; class AlasanTolakPengadaan extends Model { use HasFactory; protected $guarded = []; public function layanan() { return $this->belongsTo(Layanan::class); } }
