<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Providers; use Illuminate\Support\ServiceProvider; use Illuminate\Database\Eloquent\Factory; class DataReferensiServiceProvider extends ServiceProvider { protected $moduleName = "\104\141\x74\141\x52\145\146\145\162\x65\x6e\163\x69"; protected $moduleNameLower = "\144\x61\164\x61\162\145\x66\145\162\145\156\163\x69"; public function boot() { goto KXMWW; Opz_o: $this->loadMigrationsFrom(module_path($this->moduleName, "\x44\x61\x74\x61\x62\141\x73\145\x2f\x4d\x69\147\x72\141\x74\x69\157\x6e\163")); goto twTUe; Y_80X: $this->registerConfig(); goto E5eu7; KXMWW: $this->registerTranslations(); goto Y_80X; E5eu7: $this->registerViews(); goto Opz_o; twTUe: } public function register() { $this->app->register(RouteServiceProvider::class); } protected function registerConfig() { $this->publishes([module_path($this->moduleName, "\x43\x6f\156\146\x69\x67\x2f\x63\x6f\x6e\x66\151\x67\56\160\x68\x70") => config_path($this->moduleNameLower . "\x2e\160\150\160")], "\x63\157\x6e\146\x69\x67"); $this->mergeConfigFrom(module_path($this->moduleName, "\x43\157\156\x66\x69\147\57\143\157\x6e\x66\x69\x67\56\160\150\x70"), $this->moduleNameLower); } public function registerViews() { goto pLDwg; pLDwg: $viewPath = resource_path("\x76\x69\x65\167\x73\x2f\155\157\x64\x75\x6c\x65\x73\x2f" . $this->moduleNameLower); goto sifxA; sifxA: $sourcePath = module_path($this->moduleName, "\x52\145\163\x6f\165\162\x63\x65\x73\x2f\x76\151\x65\167\163"); goto tfyxb; tfyxb: $this->publishes([$sourcePath => $viewPath], ["\166\x69\x65\x77\x73", $this->moduleNameLower . "\x2d\155\x6f\x64\165\x6c\x65\55\x76\x69\145\x77\x73"]); goto Fqxfb; Fqxfb: $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower); goto AGRCr; AGRCr: } public function registerTranslations() { $langPath = resource_path("\154\x61\156\x67\x2f\155\x6f\x64\165\154\x65\x73\57" . $this->moduleNameLower); if (is_dir($langPath)) { $this->loadTranslationsFrom($langPath, $this->moduleNameLower); } else { $this->loadTranslationsFrom(module_path($this->moduleName, "\122\x65\x73\x6f\x75\x72\143\x65\163\x2f\154\141\156\147"), $this->moduleNameLower); } } public function provides() { return []; } private function getPublishableViewPaths() : array { goto Pe9zX; ExN27: return $paths; goto knb02; Brhhn: foreach (\Config::get("\166\x69\x65\167\x2e\160\141\x74\x68\163") as $path) { if (is_dir($path . "\x2f\x6d\x6f\x64\x75\x6c\145\x73\x2f" . $this->moduleNameLower)) { $paths[] = $path . "\57\x6d\157\x64\165\154\145\163\57" . $this->moduleNameLower; } } goto ExN27; Pe9zX: $paths = []; goto Brhhn; knb02: } }