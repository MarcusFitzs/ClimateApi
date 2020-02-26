<?php
# @Date:   2019-11-18T18:23:18+00:00
# @Last modified time: 2019-11-28T19:35:45+00:00




namespace App\Http\Resources;

use App\Comment;
use App\People;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class ArticlesResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
          'status' => 'ok',
          'totalResults' => count($this),
            'articles' => ArticleResource::collection($this->collection),
        ];
    }

    // public function with($request)
    // {
    //     $comments = $this->collection->flatMap(
    //         function ($article) {
    //             return $article->comments;
    //         }
    //     );
    //     $authors  = $this->collection->map(
    //         function ($article) {
    //             return $article->author;
    //         }
    //     );
    //     $included = $authors->merge($comments)->unique('id');
    //     return [
    //         'links'    => [
    //             'self' => route('articles.index'),
    //         ],
    //         'included' => $this->withIncluded($included),
    //     ];
    // }
    //
    // private function withIncluded(Collection $included)
    //
    // {
    //     return $included->map(
    //         function ($include) {
    //             if ($include instanceof People) {
    //                 return new PeopleResource($include);
    //             }
    //             if ($include instanceof Comment) {
    //                 return new CommentResource($include);
    //             }
    //         }
    //     );
    // }
}
