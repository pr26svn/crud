<?php

namespace Database\Factories;

use App\Models\newsCompany;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\newsCompany>
 */
class newsCompanyFactory extends Factory
{
    protected $model=newsCompany::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $file = UploadedFile::fake()->image('image.jpg', 1, 1);
        return [
            'name' => fake()->name(),
            'prevew_text' =>  Str::random(100),
            'prevew_img' => $file,
            'detile_text' => fake()->paragraph(),
            'detile_img' => $file,
            'active' =>1,
        ];
    }
}
