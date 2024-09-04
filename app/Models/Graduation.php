<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduation extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'user_id','city', 'email', 'state', 'address', 'phone', 'name', 'documents', 'quality', 'quantity' , 'color', 'size' ,'pages' , 'logo6', 'description'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
