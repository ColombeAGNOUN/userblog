<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'created_at',
        'updated_at',
    ];
    
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
    public function users(){
        return $this->belongTo(User::class);
    }
}
