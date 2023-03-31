<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\Exports; use Maatwebsite\Excel\Concerns\FromCollection; use Maatwebsite\Excel\Concerns\ShouldAutoSize; use Maatwebsite\Excel\Concerns\WithHeadings; use Maatwebsite\Excel\Concerns\WithMapping; use Maatwebsite\Excel\Concerns\WithStyles; use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet; use PhpOffice\PhpSpreadsheet\Cell\Cell; use PhpOffice\PhpSpreadsheet\Cell\DataType; use Maatwebsite\Excel\Concerns\WithCustomValueBinder; use Modules\FormasiMenpan\Entities\FmStrukturJabatan; use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder; use PhpOffice\PhpSpreadsheet\Style\Alignment; class FmNipStrukturJabatanExport extends DefaultValueBinder implements WithCustomValueBinder, FromCollection, WithHeadings, ShouldAutoSize, WithStyles, WithMapping { protected $id; public function __construct($id) { $this->id = $id; } public function collection() { goto UPeY4; VJnSk: return collect($data->select("\x66\x6d\137\163\x74\x72\165\x6b\164\x75\x72\x5f\x6a\141\x62\x61\164\141\156\x73\x2e\52")->orderBy("\153\157\x64\145")->get()); goto E4z2u; Y1yz3: if (!is_null($this->id)) { $parent = FmStrukturJabatan::find($this->id); $data->where("\153\x6f\x64\145", "\x6c\151\x6b\145", $parent->kode . "\x25"); } goto VJnSk; UPeY4: $data = FmStrukturJabatan::query()->with("\146\x6d\x5f\x6e\x69\x70\x73"); goto Y1yz3; E4z2u: } public function map($data) : array { $data_asn = $data->fm_nips->map(function ($fm_nip) { return "{$fm_nip->nip}\40\55\x20{$fm_nip->nama}\40\x2d\x20{$fm_nip->bup}"; })->implode(PHP_EOL); return ["\x69\144" => $data->id, "\153\x6f\144\145" => $data->kode, "\156\141\155\141" => $data->nama, "\x64\141\x74\x61\137\x61\163\156" => $data_asn]; } public function headings() : array { return ["\111\x44", "\x4b\x4f\104\105", "\116\101\x4d\101\x20\x4a\101\102\x41\x54\x41\116", "\104\x41\x54\101\40\x41\x53\116"]; } public function styles(Worksheet $sheet) { $sheet->getRowDimension(1)->setRowHeight(23); return [1 => ["\x66\x6f\156\164" => ["\142\157\154\144" => true]], "\101\72\x44" => ["\141\x6c\x69\147\x6e\155\x65\x6e\x74" => ["\150\x6f\x72\x69\x7a\157\x6e\164\141\154" => Alignment::HORIZONTAL_LEFT, "\166\145\162\x74\x69\143\141\154" => Alignment::VERTICAL_CENTER, "\167\162\141\160\x54\x65\170\164" => true]]]; } public function bindValue(Cell $cell, $value) { if (is_numeric($value)) { $cell->setValueExplicit($value, DataType::TYPE_STRING); return true; } return parent::bindValue($cell, $value); } }
