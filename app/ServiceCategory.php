<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class ServiceCategory extends Model
{
    //
    use Resizable;
    protected $guarded = [];
    public function services()
    {
        return $this->hasMany('App\Service');
    }
}