<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\Exports; use Maatwebsite\Excel\Concerns\FromCollection; use Maatwebsite\Excel\Concerns\ShouldAutoSize; use Maatwebsite\Excel\Concerns\WithHeadings; use Maatwebsite\Excel\Concerns\WithMapping; use Maatwebsite\Excel\Concerns\WithStyles; use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet; use PhpOffice\PhpSpreadsheet\Cell\Cell; use PhpOffice\PhpSpreadsheet\Cell\DataType; use Maatwebsite\Excel\Concerns\WithCustomValueBinder; use Modules\FormasiMenpan\Entities\FmJft; use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder; class FmJftExport extends DefaultValueBinder implements WithCustomValueBinder, FromCollection, WithHeadings, ShouldAutoSize, WithStyles, WithMapping { public function collection() { $data = FmJft::orderBy("\x6a\x61\142\x61\164\141\x6e")->get(); return collect($data); } public function map($data) : array { return ["\151\x64" => $data->id, "\x6a\x61\x62\x61\164\x61\x6e" => $data->jabatan, "\x64\x65\163\x6b\x72\151\160\163\x69" => $data->deskripsi]; } public function headings() : array { return ["\111\x44", "\x4a\x61\x62\141\x74\x61\x6e\40\106\165\x6e\147\x73\151\x6f\x6e\x61\154", "\x44\x65\x73\153\x72\x69\160\163\x69"]; } public function styles(Worksheet $sheet) { return [1 => ["\x66\x6f\156\x74" => ["\x62\157\x6c\x64" => true]]]; } public function bindValue(Cell $cell, $value) { if (is_numeric($value)) { $cell->setValueExplicit($value, DataType::TYPE_STRING); return true; } return parent::bindValue($cell, $value); } }