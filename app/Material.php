<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;


class Material extends Model
{
    	use DatePresenter;
        
         public function recipies() 
	{
	  return $this->hasMany('App\Recipie');
	}
    //
}
