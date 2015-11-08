<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Product extends Model
{
    	use DatePresenter;
    //
        public function productUnits() 
	{
	  return $this->hasMany('App\ProdictUnit');
	}
        
         public function recipies() 
	{
	  return $this->hasMany('App\Recipie');
	}
}
