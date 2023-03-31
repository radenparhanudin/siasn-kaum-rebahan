<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\Entities; use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Factories\HasFactory; class FmStrukturJabatan extends Model { use HasFactory; protected $guarded = []; public function fm_nips() { return $this->hasMany(FmNip::class); } }
