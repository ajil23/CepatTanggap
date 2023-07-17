<?php

namespace App\Exports;

use App\Models\Pambulan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PambulanExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            '#',
            'nama',
            'keperluan',
            'latitude',
            'longitude',
            'tanggal',
            'status',
            'created_at',
            'updated_at',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pambulan::all();
    }
}
