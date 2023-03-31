<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\Providers; use Illuminate\Support\Facades\Route; use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; class RouteServiceProvider extends ServiceProvider { protected $moduleNamespace = "\x4d\157\x64\x75\x6c\x65\163\134\106\x6f\162\x6d\141\x73\151\115\145\156\x70\x61\156\x5c\110\164\164\160\134\x43\x6f\x6e\164\162\157\x6c\x6c\x65\162\x73"; public function boot() { parent::boot(); } public function map() { $this->mapApiRoutes(); $this->mapWebRoutes(); } protected function mapWebRoutes() { Route::middleware("\x77\x65\142")->namespace($this->moduleNamespace)->group(module_path("\x46\x6f\162\x6d\x61\x73\151\115\x65\x6e\x70\x61\x6e", "\57\x52\157\x75\164\145\x73\x2f\167\x65\x62\x2e\x70\150\x70")); } protected function mapApiRoutes() { Route::prefix("\x61\x70\x69")->middleware("\141\x70\151")->namespace($this->moduleNamespace)->group(module_path("\106\x6f\x72\x6d\x61\x73\x69\115\x65\156\160\141\156", "\x2f\122\x6f\x75\164\145\x73\57\x61\160\151\56\x70\150\160")); } }
