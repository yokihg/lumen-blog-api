<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected $fillable = ['name'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function posts(){
        return $this->belongsToMany('App\Post','post_tag');
    }
}
