<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Place;
use App\Faker\ImageFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PlaceFactory extends Factory
{

    /**
     * @var string
     */
    protected $model = Place::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $listCategory = Category::all();

        $listNoEmptyId = [];

       foreach ($listCategory as $categry) {
            if ($categry->parent_id == null) continue;

            $listNoEmptyId[] = $categry->id;
        }

       $categoryKey = array_rand($listNoEmptyId, 1);

        return [
            'title' => $this->faker->text(50),
            'comment' => $this->faker->text(50),
            'grade' => rand(0, 5),
            'img' => $this->faker->loremFlickr('uploads'),
            'category_id' => $listNoEmptyId[$categoryKey],
        ];
    }
}
