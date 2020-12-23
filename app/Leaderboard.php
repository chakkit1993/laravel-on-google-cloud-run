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
        'player_id', 'stage', 't1', 't2', 'tResult'
    ];


    public function players(){
        return $this->belongsTo(Player::class);
  }

  
  public function findPlayer($id)
  {
      $player = Player::find($id);
      return  $player;
  }
  
}
