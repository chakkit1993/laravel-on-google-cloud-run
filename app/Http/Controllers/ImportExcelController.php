<?php

namespace App\Http\Controllers;

use App\Exports\DivisionsExport;
use App\Imports\DivisionsImport;
use App\Tournament;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
     /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
   
   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function exportExcel(Request $request , Tournament $tournament) 
    {
        //dd( $tournament ->id);
       // return (new DivisionsExport)->download('division.xlsx');
        return  Excel::download(new DivisionsExport($tournament->id), 'division.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        
       // $path = $request->upload_file->getRealPath();
      //  dd($path );
        Excel::import(new DivisionsImport, $request->upload_file);
           
        return back();
    }

}
