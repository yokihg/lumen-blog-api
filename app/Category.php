<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $fillable = ['name'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
