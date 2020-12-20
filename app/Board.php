<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = "wiz_boards";

    protected $fillable = [
        'user_id', 'title', 'content','created_at'
    ];

    public $timestamps = true;

    // 하나의 글은 하나의 회원을 가질 수 있다
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // 하나의 글은 여러 댓글을 가질 수 있다
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    

}
