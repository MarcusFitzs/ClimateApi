<?php
# @Date:   2019-11-17T19:49:00+00:00
# @Last modified time: 2019-11-19T20:52:42+00:00




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
        // return [
        //     'type'          => 'articles',
        //     'id'            => (string)$this->id,
        //     'url' => $this->url,
        //     'attributes'    => [
        //         'title' => $this->title,
        //         'url' => $this->url,
        //     ],
        //     'relationships' => new ArticleRelationshipResource($this),
        //     'links'         => [
        //         'self' => route('articles.show', ['article' => $this->id]),
        //     ],
        // ];

        return [
            'id' => $this->id,
            'name' => $this->name,
            'author' => null,
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'urlToImage' => null,
            'publishedAt' => $this->created_at,
            'content' => null
        ];
    }
}
