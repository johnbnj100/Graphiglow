<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'user_id','city', 'email', 'state', 'address', 'phone', 'name', 'quality', 'quantity' , 'color', 'documents', 'size' ,'pages' , 'logo7', 'description'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}

