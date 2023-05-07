<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'article_id',
        'user_id',
        'created_at',
        'updated_at',
    ];
    
    public function articles(){
        return $this->belongTo(Article::class);
    }
    public function users(){
        return $this->belongTo(User::class);
    }
}
