<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname','city','user_id', 'email', 'state', 'address', 'phone', 'name', 'color', 'quantity' , 'paper', 'logo4', 'description'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
