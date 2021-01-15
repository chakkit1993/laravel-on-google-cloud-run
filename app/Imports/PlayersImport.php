<?php

namespace App\Imports;

use App\Player;
use App\Leaderboard;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\RemembersChunkOffset;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class PlayersImport implements ToModel,WithStartRow,WithChunkReading
{
    use RemembersChunkOffset;
    private $tournamnet;
    function __construct($param) {
           $this->tournamnet = $param;
    }
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    public function chunkSize(): int
    {
        return 10;
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
    
        $chunkOffset = $this->getChunkOffset();

            $player =  Player ::create([
                'name' => $row[1],
                'phone' => $row[2], 
                'no'=> $row[0],
                'tag_id'=> $row[3],
                'img'=>'',
                'tour_id'=> $this->tournamnet->id,
                'create_date' =>  date('Y-m-d H:i:s'), 
                'create_by'=> Auth::user()->name,
            ]);

            $id_division= array( $row[4],$row[5],$row[6],$row[7],$row[8]);
            //dd($id_division);
    
            if ($id_division) {
              
                $player->divisions()->attach( $id_division );
                }
        
        
                for($x = 1 ; $x < 6 ;$x++){
                    $leader =  Leaderboard::create([
                        'player_id' => $player->id,
                        't1' => '00:00:00',
                        't2' => '00:00:00',
                        'tResult' => '00:00:00',
                        'stage'=>'S'.$x,
                       
                   ]);
            }


        return ;
    }
}
