<?php

namespace App\Exports;

use App\Division;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DivisionsExport implements FromCollection,WithHeadings
{
     
    protected $tour_id;

    function __construct($id) {
           $this->id = $id;
    }


    public function headings():array
    {

        return[
            "id",
            'Name',
            'Descirption',
            'Image Path',
            'Tournament ID',
            'Create Date',
            'Create By',
        ];
    }
   

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return Division::where('tour_id',$this->id)->get();


        //return Division::all();
    }
  
  
    
}
