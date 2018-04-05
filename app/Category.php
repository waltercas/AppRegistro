<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name'];


    public function movements()
    {
        return $this->hasmany('App\Movement');
    }



}
