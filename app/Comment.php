<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    protected $fillable = ['post_id','comment','user_id','text'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function post(){
        return $this->belongsTo('App\Post');
    }

}
