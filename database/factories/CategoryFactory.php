<?php

namespace Database\Factories;

use App\Enum\CategoryType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->randomElement([
            // Project categories
            "Frontend Development", 
            "Backend Development",
            "Full Stack Development",
            "Mobile App",
            "API Development",
            "E-commerce",
            // Skill categories
            "Programming Languages",
            "Frameworks",
            "Databases",
            "DevOps & Tools",
            "Design & UI/UX",
        ]);

        return [
            'name' => $name,
            'description' => $this->faker->sentence(),
            'slug' => Str::slug($name),
            'type' => $this->faker->randomElement(CategoryType::values()),
            'color' => $this->faker->randomElement([
                '#3B82F6', '#EF4444', '#10B981', '#F59E0B', 
                '#8B5CF6', '#06B6D4', '#84CC16', '#F97316'
            ]),
            'icon' => $this->faker->randomElement([
                'code', 'database', 'server', 'mobile', 'palette', null
            ]),
            'sort_order' => $this->faker->numberBetween(1, 20),
        ];
    }

    // Create a project category
    public function project(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => CategoryType::PROJECT->value,
        ]);
    }

    // Create a skill category
    public function skill(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => CategoryType::SKILL->value,
        ]);
    }
}
