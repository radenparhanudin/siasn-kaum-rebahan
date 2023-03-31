<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Http\Controllers; use App\Traits\SIASNGateway; use App\Traits\UpdateReferensi; use Illuminate\Foundation\Auth\Access\AuthorizesRequests; use Illuminate\Foundation\Bus\DispatchesJobs; use Illuminate\Foundation\Validation\ValidatesRequests; use Illuminate\Routing\Controller as BaseController; class Controller extends BaseController { use AuthorizesRequests, DispatchesJobs, ValidatesRequests, SIASNGateway, UpdateReferensi; public function sendResponse($status, $message = null, $data = [], $code = 200) { return response(["\163\x74\141\164\165\163" => $status, "\155\145\163\x73\141\147\x65" => $message, "\x64\141\164\x61" => $data], $code); } }
