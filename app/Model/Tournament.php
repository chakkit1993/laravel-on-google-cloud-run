<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'address','date' ,'img','create_date','create_by'
    ];

    public function divivisons()
    {
        return $this->hasMany(Division::class);
    }

}
