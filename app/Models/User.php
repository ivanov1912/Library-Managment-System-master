<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'role_id',
        'flag_id',
        'last_seen',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsTo(Role::class,'role_id','id');
    }

    public function genders(){
        return $this->belongsTo(Gender::class,'gender_id','id');
    }

    public function user_flags(){
        return $this->belongsTo(UserFlags::class,'flag_id','id');
    }

    public function books(){
        return $this->belongsTo(Book::class,'book_id','id');
    }

    public function comments(){
        return $this->hasMany(AssignComment::class,'user_id','id');
    }

    public function visitorBooks()
    {
        return $this->belongsToMany(Book::class,'assign_books', 'user_id', 'book_id');
    }
    
}
