<?php
# @Date:   2019-11-17T19:49:00+00:00
# @Last modified time: 2020-02-26T18:30:10+00:00




namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ArticleResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {


        return [
            'source' => [
              'id' => $this->id,
              'name' => $this->name
            ],
              'author' => null,
              'title' => $this->title,
              'description' => $this->description,
              'detailedDesc' => $this->detailedDesc,
              'url' => $this->url,
              'urlToImage' => null,
              'publishedAt' => $this->publishedAt,
              'content' => null
          //]
        ];
    }
}
