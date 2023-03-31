<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Entities; use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Factories\HasFactory; class GajiPokok extends Model { use HasFactory; protected $guarded = []; public function golongan() { return $this->belongsTo(Golongan::class); } }
