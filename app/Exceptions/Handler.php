<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Exceptions; use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler; use Throwable; class Handler extends ExceptionHandler { protected $dontReport = []; protected $dontFlash = ["\143\165\162\x72\145\156\x74\137\160\x61\x73\x73\x77\157\x72\x64", "\160\141\x73\x73\167\x6f\x72\x64", "\160\141\x73\x73\x77\157\162\x64\x5f\x63\157\x6e\146\151\162\x6d\141\x74\151\x6f\x6e"]; public function register() { $this->reportable(function (Throwable $e) { }); } }
