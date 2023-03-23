<?php

namespace App\Imports\Clubs;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DefaultClubsImport implements ToCollection, WithHeadingRow
{

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }
}
