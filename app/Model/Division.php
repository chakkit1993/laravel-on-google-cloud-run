<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Division extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'tour_id','img','create_date','create_by'
    ];


    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function deleteImage()
    {

        Storage::delete($this->image);
    }
}
