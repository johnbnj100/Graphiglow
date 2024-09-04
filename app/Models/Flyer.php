<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname','user_id','city','email', 'state','phone', 'address', 'name','color','type', 'size','quality', 'quantity', 'description', 'flyer'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


}
