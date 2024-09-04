<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jotter extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname','city','user_id','email', 'state','phone', 'address', 'name','color','type', 'quality', 'quantity', 'style', 'description', 'jotter',];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
