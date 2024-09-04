<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function banner(){
        return $this->hasMany(Banner::class);
    }

    public function church(){
        return $this->hasMany(Church::class);
    }

    public function jotter(){
        return $this->hasMany(Jotter::class);
    }

    public function cards(){
        return $this->hasMany(Card::class);
    }

    public function graduation(){
        return $this->hasMany(Graduation::class);
    }

    public function wedding(){
        return $this->hasMany(Wedding::class);
    }

    public function packaging(){
        return $this->hasMany(Packaging::class);
    }

    public function business(){
        return $this->hasMany(Business::class);
    }

    public function ctp(){
        return $this->hasMany(Ctp::class);
    }

    public function calendar(){
        return $this->hasMany(Calender::class);
    }

    public function embroidery(){
        return $this->hasMany(Logo::class);
    }

    public function flyer(){
        return $this->hasMany(Flyer::class);
    }

}
