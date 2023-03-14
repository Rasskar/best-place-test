<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Category::class;

    private $counter = 0;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = null;

        if ($this->counter >= 5) $id = rand(1, 5);

        $this->counter++;

        return [
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->text(200),
            'parent_id' => $id,
        ];
    }
}
