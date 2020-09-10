<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'gender', 'captain_id',
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_sports', 'sport_id', 'user_id');
    }

    public function captain()
    {
        return $this->belongsTo('App\Models\User', 'captain_id', 'id');
    }

}
