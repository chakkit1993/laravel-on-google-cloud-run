<?php

namespace App\Exports;

use App\Division;
use Maatwebsite\Excel\Concerns\FromCollection;

class DivisionsExport implements FromCollection
{
     
    protected $tour_id;

    function __construct($id) {
           $this->id = $id;
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
