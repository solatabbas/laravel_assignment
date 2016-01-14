<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';

    /*
     * A products owned by admin user
     * */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
