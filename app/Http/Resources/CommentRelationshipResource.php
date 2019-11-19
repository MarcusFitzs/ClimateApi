<?php
# @Date:   2019-11-17T20:08:11+00:00
# @Last modified time: 2019-11-18T17:53:16+00:00




namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CommentRelationshipResource extends Resource
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
          'author'   => [
              'data'  => new AuthorIdentifierResource($this->author),
          ],
      ];
  }

  public function with($request)
  {
      return [
          'links' => [
              'self' => route('comments.index'),
          ],
      ];
  }
}
