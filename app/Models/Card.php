<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname','city', 'user_id','email', 'state', 'phone', 'color', 'address', 'name', 'type' , 'quantity', 'description', 'logo9',];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
