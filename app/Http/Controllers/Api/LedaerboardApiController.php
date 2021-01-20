<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Leaderboard;
use App\Player;
use Illuminate\Http\Request;

class LedaerboardApiController extends Controller
{
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tour_id = $request->tour_id;
       // dd($request->all());
     
        // $division->update(([
        //     'name'=>$request->name,
        //     'description'=>$request->description
        // ]));
        $leaderboard = Leaderboard::all();
        //dd($divisions);
        return response()->json($leaderboard);

        // Session()->flash('success','แก้ไขข้อมูลสำเร็จ');
       
        // return redirect(route('tournaments.show' , $tour_id));
    }

          /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAll(Request $request , $id)
    {

        $totalData =   count($request->data);
      
        for($i = 0 ; $i<$totalData ; $i++){

            $leaderboard  =  Leaderboard::where('stage', $request->data[$i]['stage'])->first();

           
            $player = $leaderboard->findPlayerRFID($request->data[$i]['tournament'], $request->data[$i]['rfid']);
            if($player == null){
                // not found plyer in tournamnet
                continue;
            }
            else{
                $leader = $leaderboard->where('player_id',  $player->id)->first();
                $point =  $request->data[$i]['point'];
                switch ($point) {
                    case 'PC0':
                        $leader['t1']  =  $request->data[$i]['time'];
                        $leader['time_pc0']  =  $request->data[$i]['time'];
                        $leader['pc0'] = 1;
                      break;
                    case 'PC1':
                        $leader['time_pc1']  =  $request->data[$i]['time'];
                        $leader['pc1'] = 1;
                      break;
                    case 'PC2':
                        $leader['time_pc2']  =  $request->data[$i]['time'];
                        $leader['pc2'] = 1;
                        break;
                    case 'PC3':
                        $leader['time_pc3']  =  $request->data[$i]['time'];
                        $leader['pc3'] = 1;
                        break;
                    case 'PC4':
                        $leader['time_pc4']  =  $request->data[$i]['time'];
                        $leader['pc4'] = 1;
                        break;
                    case 'PC5':
                        $leader['time_pc5']  =  $request->data[$i]['time'];
                        $leader['pc5'] = 1;
                        break;
                    case 'PC6':
                        $leader['t2']  =  $request->data[$i]['time'];
                        $leader['time_pc6']  =  $request->data[$i]['time'];
                        $leader['pc6'] = 1;
                        break;
                    default:
                        $leader['pc1'] = 0;
                  }
    
                $leader->save();
    
            } 

          
            $views[]=  $leader ;
        }

     //   $leaderboard->save();
//
        //$tour_id = $request->tour_id;
        //dd($request->all());
        
        //$leaderboards = Leaderboard::all()->where('stage',$request->stage);
        // dd($request->all());
        $s = 1;
   
    
     
   
        //dd($divisions);
        return response()->json(  $views  );

        // Session()->flash('success','แก้ไขข้อมูลสำเร็จ');
       
        // return redirect(route('tournaments.show' , $tour_id));
    }

}
