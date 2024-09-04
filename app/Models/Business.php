<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname','city', 'email','user_id', 'phone', 'state', 'address', 'color', 'size', 'quality' , 'quantity', 'pages','name','documents', 'business', 'description'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
