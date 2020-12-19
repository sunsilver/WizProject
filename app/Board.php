<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = "wiz_boards";

    protected $fillable = [
        'user_id', 'title', 'content','created_at'
    ];

}
