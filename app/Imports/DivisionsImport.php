<?php

namespace App\Imports;

use App\Division;
use Maatwebsite\Excel\Concerns\ToModel;

class DivisionsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Division([
        'name' => $row[0],
        'description' => $row[1], 
        'img'=> $row[3],
        'tour_id'=> $row[4],
        'create_date' => $row[5], 
        'create_by'=> $row[6],
        ]);
    }
}
