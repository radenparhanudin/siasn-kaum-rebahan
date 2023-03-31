<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Entities; use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Factories\HasFactory; use Modules\ProfileASN\Entities\Asn; class KedudukanHukum extends Model { use HasFactory; protected $guarded = []; public function asns() { return $this->hasMany(Asn::class); } }
