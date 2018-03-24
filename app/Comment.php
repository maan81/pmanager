<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'body',
        'url',
        'user_id',
        'commentable_id',   // project_id OR company_id
        'commentable_type', // project OR company
    ];
}
