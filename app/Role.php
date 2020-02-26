<?php
# @Date:   2019-12-02T14:12:47+00:00
# @Last modified time: 2019-12-02T14:13:12+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
      return $this->belongsToMany('App\User', 'user_role');
    }
}
 
