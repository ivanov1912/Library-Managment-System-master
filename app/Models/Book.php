<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'books';
    protected $fillable = ['image','name','year','author_id','genre_id','content','created_at','updated_at'];
    
    public function authors(){
        return $this->belongsTo(Author::class,'author_id','id');
    }

    public function genres(){
        return $this->belongsTo(GendreBook::class,'genre_id','id');
    }

    public function comments(){
        return $this->hasMany(AssignComment::class,'book_id','id');
    }
   
    public function flags(){
        return $this->belongsTo(BooksFlags::class,'flag_id','id');
    }

}
