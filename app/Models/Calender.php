<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'user_id','city', 'email', 'phone', 'state', 'address', 'color', 'quality' , 'quantity' ,'name' , 'type' , 'height', 'width', 'calendar', 'description'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
