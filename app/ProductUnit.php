<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;


class ProductUnit extends Model
{
    	use DatePresenter;
    //
        
        public function product() 
	{
		return $this->belongsTo('App\Product');
	}
}
