<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignComment extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'assign_comments';
    protected $fillable = ['name','user_id','book_id','created_at','updated_at'];

    public function books(){
        return $this->belongsTo(Book::class,'book_id','id');
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
