<?php

namespace App\Http\Controllers;

use App\Division;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DivisionsExport;
use App\Exports\PlayersExport;
use App\Imports\DivisionsImport;
use App\Imports\PlayersImport;
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

    
    public function exportExcelplayers(Request $request , Division $division) 
    {  
        //dd($division);


        //return response()->json($division->players()->get());
      
        // dd( $tournament ->id);
       // return (new DivisionsExport)->download('division.xlsx');
         return  Excel::download(new PlayersExport($division), 'players.xlsx');
        // return back();
    }

    
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importDivision(Request $request, Tournament $tournament) 
    {
        
       // $path = $request->upload_file->getRealPath();
       //dd($tournament->name );

        Excel::import(new DivisionsImport($tournament), $request->upload_file);
           
        return back();
    }

      /**
    * @return \Illuminate\Support\Collection
    */
    public function importPLayers(Request $request, Tournament $tournament) 
    {
        $validated = $request->validate([
            'upload_file' => 'required',
        ]);

        if($validated){
            Session()->flash('success', 'ข้อมูลถูกต้อง');
            Excel::import(new PlayersImport($tournament), $request->upload_file);
        }else{
            Session()->flash('error', 'ข้อมูลไม่ถูกต้อง');
            redirect(route('tournaments.leaderboards' , $tournament->id));

        }
    //     $path = $request->upload_file->getRealPath();
        //dd( $request->upload_file );

        
           
        return back();
    }


}
