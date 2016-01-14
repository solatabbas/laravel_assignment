<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    //
    protected $table = 'category';
    protected $fillable = array('title', 'description', 'created_at','updated_at','user_id', 'image_title','image_path');

    protected  $dates = ['created_at'];

    public function setCreatedAtAttribute($date)
    {
        $this->attributes['created_at'] = Carbon::parse($date);
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('m/d/Y');
    }

    /*
     * A category owned by admin user
      *  */

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /*
     *  get all category with owner
     */

    public static function getAllCategories()
    {
        $data = Category::join('users',function($join) {
            $join->on('category.user_id', '=', 'users.id');

        })
        ->select('category.id','title','description','image_title','name')
        ->orderBy('category.id', 'desc')
        ->paginate(50);
        return $data;

    }

}
