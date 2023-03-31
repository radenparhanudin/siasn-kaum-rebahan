<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use App\Http\Controllers\Auth\LoginController; use Illuminate\Support\Facades\Auth; use Illuminate\Support\Facades\Route; goto uB81b; uB81b: Route::get("\57", function () { return redirect(route("\x6c\x6f\147\x69\156")); }); goto rezvT; gal1g: Route::post("\57\x6c\157\147\x6f\165\x74", [LoginController::class, "\154\x6f\147\x6f\x75\164"])->middleware("\x61\x75\x74\x68")->name("\154\x6f\x67\x6f\165\x74"); goto BaYwx; rezvT: Route::prefix("\x6c\x6f\x67\x69\156")->group(function () { Route::get("\x2f", [LoginController::class, "\163\x68\157\167\114\157\x67\x69\156\106\x6f\x72\x6d"])->name("\154\x6f\x67\151\x6e"); Route::post("\57", [LoginController::class, "\154\x6f\x67\151\156"]); }); goto gal1g; BaYwx: Route::get("\x2f\150\157\155\145", [App\Http\Controllers\HomeController::class, "\x69\x6e\x64\145\x78"])->name("\150\157\x6d\x65");
