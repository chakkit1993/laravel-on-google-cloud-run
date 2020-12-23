<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leaderboard;
class LeaderboardsController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['player_id', 'stage', 't1' , 't2']);
        //Convert String To Time
        $t1 = strtotime ( $request->t1 ); 
        $t2 = strtotime ( $request->t2 ); 

        // Set Format 
        $sdate =  date('H:i:s',$t1);
        $ldate =  date('H:i:s',$t2);
      

        $gmtTimezone = config('app.timezone');


        $timediff = strtotime($ldate) -  strtotime($sdate);
        $temp =  date('H:i:s',$timediff );
        // Covert timezone +07:00:00
        $timediff2 =  date('H:i:s',  strtotime($temp) - 7*60*60);


        $leader =  Leaderboard::create([
            'player_id' => $request->player_id,
            't1' => $request->t1,
            't2' => $request->t2,
            'tResult' => $timediff2,
            'stage'=>$request->stage,
           
       ]);

       $tour_id =  $leader->findPlayer( $leader->player_id)->tour_id;
        

        
      
        //dd(  $sdate.'end = '. $ldate.' diff '.$timediff2 .' => '.$temp);

        
        Session()->flash('success','บันทึกข้อมูลสำเร็จ' );
  
        return redirect(route('tournaments.show' , $tour_id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
