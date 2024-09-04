<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname','city', 'user_id', 'email', 'phone', 'state', 'address', 'color', 'size', 'quality' , 'quantity', 'pages' ,'name' ,'documents' , 'logo8', 'description'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
