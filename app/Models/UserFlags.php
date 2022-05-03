<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFlags extends Model
{
    use HasFactory;
    protected $user_flags = 'user_flags';
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    public function users(){
        return $this->hasMany(User::class,'flag_id','id');
    }

}
