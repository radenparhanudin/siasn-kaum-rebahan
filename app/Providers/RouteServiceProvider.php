<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Providers; use Illuminate\Cache\RateLimiting\Limit; use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; use Illuminate\Http\Request; use Illuminate\Support\Facades\RateLimiter; use Illuminate\Support\Facades\Route; class RouteServiceProvider extends ServiceProvider { public const HOME = "\57\150\x6f\155\x65"; public function boot() { $this->configureRateLimiting(); $this->routes(function () { Route::prefix("\x61\160\151")->middleware("\x61\160\151")->namespace($this->namespace)->group(base_path("\x72\157\x75\164\x65\x73\x2f\141\x70\151\x2e\160\150\160")); Route::middleware("\x77\145\x62")->namespace($this->namespace)->group(base_path("\162\x6f\165\x74\x65\x73\x2f\x77\145\142\56\160\150\x70")); }); } protected function configureRateLimiting() { RateLimiter::for("\141\x70\x69", function (Request $request) { return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip()); }); } }
