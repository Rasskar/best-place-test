<?php


namespace App\Faker;

use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

final class ImageFaker extends Base
{

    /**
     * @param string $dir
     * @param int $width
     * @param int $height
     * @return string
     */
    public function loremFlickr(string $dir = '', int $width = 500, int $height = 500) : string
    {
        $name = $dir . '/' . Str::random(8) . '.jpg';

        Storage::put(
            'public/' . $name,
            file_get_contents("https://loremflickr.com/$width/$height")
        );

        return '/storage/' . $name;
    }

}
