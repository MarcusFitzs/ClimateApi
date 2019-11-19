<?php
# @Date:   2019-11-17T18:59:55+00:00
# @Last modified time: 2019-11-18T17:43:30+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function author()
    {
        return $this->belongsTo(People::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
