<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DivisionsExport;
use App\Imports\DivisionsImport;
use App\Tournament;
use Illuminate\Http\Request;



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
        // dd( $tournament ->id);
       // return (new DivisionsExport)->download('division.xlsx');
        return  Excel::download(new DivisionsExport($tournament), 'division.xlsx');
        return back();
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request, Tournament $tournament) 
    {
        
       // $path = $request->upload_file->getRealPath();
       //dd($tournament->name );

        Excel::import(new DivisionsImport($tournament), $request->upload_file);
           
        return back();
    }

}
