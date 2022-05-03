<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public $timestamps = true;
    protected $table = 'genders';
    protected $fillable = ['name','created_at','updated_at'];
    
    public function users(){
        return $this->hasMany(User::class,'gender_id','id');
    }
    
    public function authors(){
        return $this->hasMany(Author::class,'gender_id','id');
    }

    use HasFactory;
}
