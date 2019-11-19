<?php
# @Date:   2019-11-17T19:00:52+00:00
# @Last modified time: 2019-11-18T17:42:43+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(People::class);
    }

    /**
     * Comment belongs to Article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
