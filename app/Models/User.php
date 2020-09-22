<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password', 'points', 'years_ihg', 'allocated_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function sports()
    {
        return $this->belongsToMany('App\Models\Sport', 'user_sports', 'user_id', 'sport_id');
    }

    public function captainOf() {
        return $this->hasOne('App\Models\Sport', 'captain_id', 'id');
    }

    public function hasBids() {
        return $this->bids()->count() > 0;
    }

    public function bids() {
        return $this->hasMany('App\Models\Bid', 'user_id', 'id');
    }

    public function biddingRound() {
        $years_ihg = $this->years_ihg;
        if ($years_ihg == 0) return 4;
        if ($years_ihg == 1) return 3;
        if ($years_ihg == 2) return 2;
        if ($years_ihg >= 3) return 1;
    }

    public function numbers() {
        return $this->belongsToMany('App\Models\Number', 'bids', 'user_id', 'number_id');
    }

    public function rank1() {
        return $this->hasOne('App\Models\Bid', 'user_id', 'id')->where('priority', 1);
    }

    public function rank2() {
        return $this->hasOne('App\Models\Bid', 'user_id', 'id')->where('priority', 2);
    }

    public function rank3() {
        return $this->hasOne('App\Models\Bid', 'user_id', 'id')->where('priority', 3);
    }

    public function rank4() {
        return $this->hasOne('App\Models\Bid', 'user_id', 'id')->where('priority', 4);
    }

    public function rank5() {
        return $this->hasOne('App\Models\Bid', 'user_id', 'id')->where('priority', 5);
    }
}
