<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\Repositories; use Modules\FormasiMenpan\Traits\FormasiMenpanTrait; class FormasiMenpanRepository { use FormasiMenpanTrait; public function get($path, $additional_headres) { return $this->getRequestFormasiMenpan($path, $additional_headres); } public function post($path, $params, $additional_headres) { return $this->postRequestFormasiMenpan($path, $params, $additional_headres); } public function delete($path, $params, $additional_headres) { return $this->deleteRequestFormasiMenpan($path, $params, $additional_headres); } }
