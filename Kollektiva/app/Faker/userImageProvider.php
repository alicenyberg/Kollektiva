<?php

namespace App\Faker;

use Faker\Provider\Base;

class ImageProvider extends Base
{
    protected static $images = [
        'user1',
        'user2',
        'user3',
        'user4',
        'user5',
        'user6',
        'user8',
        'user9',
    ];

    public function userImage(): string
    {
        return static::randomElement(static::$images);
    }
}
