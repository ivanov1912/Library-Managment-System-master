<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignUser extends Model
{
    
    public function users(){
        return $this->belongsTo(Author::class,'user_id','id');
    }

    public function books(){
        return $this->belongsTo(Gender::class,'book_id','id');
    }
    public $timestamps = true;
    use HasFactory;
}
