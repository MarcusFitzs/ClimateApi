<?php
# @Date:   2019-11-17T18:59:06+00:00
# @Last modified time: 2019-11-18T17:43:53+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    /**
     * People has many Articles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
