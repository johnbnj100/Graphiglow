<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ctp extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname','user_id','city', 'email', 'state', 'address','color', 'quantity', 'phone', 'name', 'plate' , 'logo3', 'description'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
