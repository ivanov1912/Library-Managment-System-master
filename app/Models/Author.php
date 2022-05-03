<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'authors';
    protected $fillable = ['name','gender_id','genre_id','image','created_at','updated_at'];

    public function genres(){
        return $this->belongsTo(GendreAuthor::class,'genre_id','id');
    }

    public function genders(){
        return $this->belongsTo(Gender::class,'gender_id','id');
    }


}
