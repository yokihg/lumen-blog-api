<?php
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
/**
 * Factory definition for model Role.
 */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    $role = App\Role::inRandomOrder()->first();
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'password' => Hash::make('123456'),
        'role_id' => $role->id
    ];
});



/**
 * Factory definition for model Category.
 */
$factory->define(Category::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model Post.
 */
$factory->define(Post::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model Tag.
 */
$factory->define(Tag::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model Comment.
 */
$factory->define(Comment::class, function ($faker) {
    return [
        // Fields here
    ];
});
