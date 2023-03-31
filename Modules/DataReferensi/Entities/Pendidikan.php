<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Entities; use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Factories\HasFactory; class Pendidikan extends Model { use HasFactory; protected $guarded = []; public function tingkat_pendidikan() { return $this->belongsTo(TingkatPendidikan::class); } }
