<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksFlags extends Model
{
    use HasFactory;
    protected $table = 'books_flags';
    public $timestamps = true;
    protected $fillable = ['name','created_at','updated_at'];
    
    public function books(){
        return $this->hasMany(Book::class,'flag_id','id');
    }

}
