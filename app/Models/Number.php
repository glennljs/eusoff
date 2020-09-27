<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Number extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'bids', 'number_id', 'user_id');
    }

    public function bids()
    {
        return $this->hasMany('App\Models\Bid')->orderBy('priority', 'asc');
    }

    public function maleBids()
    {
        return $this->bids()->whereHas('user', function (Builder $query) {
            $query->where('gender', true)->orWhere('has_mixed', true);
        });
    }

    public function femaleBids()
    {
        return $this->bids()->whereHas('user', function (Builder $query) {
            $query->where('gender', false)->orWhere('has_mixed', true);
        });
    }

    public function rank1users() {
        return $this->belongsToMany('App\Models\User', 'bids', 'number_id', 'user_id')->where('priority', 1);
    }

    public function rank2users() {
        return $this->belongsToMany('App\Models\User', 'bids', 'number_id', 'user_id')->where('priority', 2);
    }

    public function rank3users() {
        return $this->belongsToMany('App\Models\User', 'bids', 'number_id', 'user_id')->where('priority', 3);
    }

    public function rank4users() {
        return $this->belongsToMany('App\Models\User', 'bids', 'number_id', 'user_id')->where('priority', 4);
    }

    public function rank5users() {
        return $this->belongsToMany('App\Models\User', 'bids', 'number_id', 'user_id')->where('priority', 5);
    }

}
