<?php

namespace App\Exports;

use App\Division;
use App\Player;
use App\viewPlayers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

class PlayersExport implements FromCollection,WithHeadings
{
    private $division;
    function __construct($param) {
           $this->division = $param;
    }


    public function headings():array
    {

        return[
            'ชื่อ',
            'หมายเลขรถ',
            'rfid',
        ];

        // return[
        //     'Name',
        //     'Descirption',
        //     'ImagePath',
        //     'Tournament',
        //     'CreateDate',
        //     'CreateBy',
        // ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $players = $this->division->players()->get();

       
        $views = new Collection();
        foreach($players as $player){
            $leaderboard = $player->findLeaderboards($player->id)->where('stage','S1')->first();
            $view =[
                'name' => $player['name'],
                'no' => $player['no'],
                'rfid' => $player['tag_id'],
                //'leaderboard' => $leaderboard['t1'],
                'stage'=>  $leaderboard['stage'],
                't1'=>  $leaderboard['t1'],
                't2'=>  $leaderboard['t2'],
                'tResult'=>  $leaderboard['tResult'],
            ];
            //array_push($views, $view);
            $views[] = $view;
        }
        
        //dd(  $views);
        return $views ;

        //return $this->division->players()->select('name', 'no','tag_id')->findLeaderboards()->get();
        //return response()->json($this->division->players()->get());

    }
}
