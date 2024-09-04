<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{

    use HasFactory;
    protected $table = 'banners';
    protected $fillable = ['firstname','lastname','user_id', 'city', 'email', 'state', 'phone', 'address', 'savname', 'quantity', 'logo', 'height', 'width', 'description'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}

