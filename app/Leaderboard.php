<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'player_id', 'stage', 't1', 't2', 'tResult','time_pc0', 'time_pc1', 'time_pc2', 'time_pc3', 'time_pc4', 'time_pc5', 'time_pc6'
    ];


    public function players(){
        return $this->belongsTo(Player::class);
  }
  
  public function findPlayer($id)
  {
      $player = Player::where('id' , $id)->first();
      return  $player;

  }
  public function findPlayerTournament($tournamnet , $id)
  {
      $player = Player::where('id' , $id)->where('tour_id', $tournamnet)->first();
      return  $player;
  }

  public function findPlayerRFID($tournamnet,$rfid)
  {
      $player = Player::where('tour_id', $tournamnet)->where('tag_id' , $rfid)->first();
      return  $player;
  }

  
}
