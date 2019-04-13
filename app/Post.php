<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $fillable = ['seo_title','seo_desc','seo_keyword','title','description','user_id','category_id'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag','post_tag');
    }
}
