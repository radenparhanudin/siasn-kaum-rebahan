<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Http\Middleware\TrustHosts as Middleware; class TrustHosts extends Middleware { public function hosts() { return [$this->allSubdomainsOfApplicationUrl()]; } }
