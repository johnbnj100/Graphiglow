<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'user_id','city', 'lastname','email', 'state', 'phone', 'address', 'material', 'name', 'height', 'width','logo','logo2', 'description'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
