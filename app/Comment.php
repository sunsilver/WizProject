<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id', 'comment_writer_id', 'post_id','content','created_at','updated_at'
    ];


    public function getUserName()
    {
        // 하나의 댓글은 1명의 작성자를 가진다
        return $this->hasOne('App\User', 'id', 'comment_writer_id');
    }
}
