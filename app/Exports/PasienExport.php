<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class PasienExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            '#',
            'nama',
            'tanggal lahir',
            'riwayat',
            'alamat',
            'email',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('users')-> select('id', 'name', 'tgl_lahir', 'riwayat', 'alamat', 'email')->get();
    }
}
