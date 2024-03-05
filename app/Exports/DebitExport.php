<?php

namespace App\Exports;

use App\Debit;
use Maatwebsite\Excel\Concerns\FromCollection;

class DebitExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Debit::all();
    }
}
