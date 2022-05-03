<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class AssignBook extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'assign_books';
    protected $fillable = ['user_id','book_id','date_of_receipt','date_of_return','created_at','updated_at'];

    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function books(){
        return $this->belongsTo(Book::class,'book_id','id');
    }

    public function authors(){
        return $this->belongsTo(Author::class,'author_id','id');
    }

    public function genres(){
        return $this->belongsTo(GendreBook::class,'genre_id','id');
    }
}
