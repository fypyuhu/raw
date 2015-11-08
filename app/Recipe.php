<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;


class Recipe extends Model
{
    	use DatePresenter;
          public function product() 
	{
		return $this->belongsTo('App\Product');
	}
          public function material() 
	{
		return $this->belongsTo('App\Material');
	}
    //
}
