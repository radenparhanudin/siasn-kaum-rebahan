<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Traits; use Illuminate\Support\Str; trait UuidTrait { public static function bootUuidTrait() { static::creating(function ($model) { goto aLw1H; BoyHC: $model->{$model->getKeyName()} = $model->{$model->getKeyName()} ?: (string) Str::orderedUuid(); goto HgZhb; aLw1H: $model->keyType = "\x73\x74\x72\x69\x6e\x67"; goto Bu3P6; Bu3P6: $model->incrementing = false; goto BoyHC; HgZhb: }); } public function getIncrementing() { return false; } public function getKeyType() { return "\163\164\x72\x69\156\x67"; } }
