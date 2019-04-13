<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $fillable = ['name'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
