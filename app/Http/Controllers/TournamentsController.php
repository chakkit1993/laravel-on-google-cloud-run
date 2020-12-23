<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use App\Division;
use App\Leaderboard;
use App\Player;
use App\Tournament;
use Illuminate\Http\Request;

class TournamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.tournaments.index')->with('tournaments', Tournament::all()->sortByDesc('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('tournaments.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTournamentRequest $request)
    {
      //  dd($request);
         // insert data to db
         $image = 'image_path';//$request->image->store('posts');
         $ldate = date('Y-m-d H:i:s');
         Tournament::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'date' => $request->date,
            'img' => $image,
            'create_date' => $ldate,
            'create_by' => auth()->user()->name
        ]);

        Session()->flash('success','บันทึกข้อมูลสำเร็จ');
       
        return redirect(route('tournaments.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        
       
        return view('admin.tournaments.details')
        ->with('tournament',$tournament)
        ->with('divisions', Division::all()->where('tour_id', $tournament->id))
        ->with('players', Player::all()->where('tour_id', $tournament->id))
        ->with('leaderboards', Leaderboard::all());
       
    }

          /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details(Tournament $tournament)
    {
        // dd($tournament);
        return response()->json($tournament);
        
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tournament $tournament)
    {
        //return view('tournament.create')->with('tournament',$tournament);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTournamentRequest $request,Tournament $tournament)
    {
        //dd($request->all());
            $tournament->update(([
                'name'=>$request->name,
                'address'=>$request->address,
                'date'=>$request->date,
                'description'=>$request->description
            ]));
    
            Session()->flash('success','แก้ไขข้อมูลสำเร็จ');
           
            //return redirect(route('tournaments.index'));
            return view('admin.tournaments.details')
                 ->with('tournament',$tournament)
                 ->with('divisions', Division::all()->where('tour_id', $tournament->id));


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournament $tournament)
    {
        //$tournament->tags()->detach($tournament->post_id);
        $tournament->delete();
        //$tournament->deleteImage();
        Session()->flash('success', 'ลบข้อมูลสำเร็จ');

        return redirect(route('tournaments.index'));
    }
}
