<?php

namespace Database\Seeders;

use App\Enum\CategoryType;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Project Categories
        $projectCategories = [
            [
                'name' => 'Frontend Development',
                'description' => 'Projects focused on user interface and client-side development',
                'slug' => 'frontend-development',
                'type' => CategoryType::PROJECT,
                'color' => '#3B82F6',
                'icon' => 'code',
                'sort_order' => 1,
            ],
            [
                'name' => 'Backend Development',
                'description' => 'Server-side applications and API development',
                'slug' => 'backend-development',
                'type' => CategoryType::PROJECT,
                'color' => '#10B981',
                'icon' => 'server',
                'sort_order' => 2,
            ],
            [
                'name' => 'Full Stack',
                'description' => 'Complete web applications with both frontend and backend',
                'slug' => 'full-stack',
                'type' => CategoryType::PROJECT,
                'color' => '#8B5CF6',
                'icon' => 'layers',
                'sort_order' => 3,
            ],
            [
                'name' => 'Mobile App',
                'description' => 'Mobile applications for iOS and Android',
                'slug' => 'mobile-app',
                'type' => CategoryType::PROJECT,
                'color' => '#F59E0B',
                'icon' => 'mobile',
                'sort_order' => 4,
            ],
            [
                'name' => 'API Development',
                'description' => 'RESTful APIs and microservices',
                'slug' => 'api-development',
                'type' => CategoryType::PROJECT,
                'color' => '#EF4444',
                'icon' => 'api',
                'sort_order' => 5,
            ],
        ];

        // Skill Categories
        $skillCategories = [
            [
                'name' => 'Programming Languages',
                'description' => 'Core programming languages and syntax',
                'slug' => 'programming-languages',
                'type' => CategoryType::SKILL,
                'color' => '#06B6D4',
                'icon' => 'code',
                'sort_order' => 1,
            ],
            [
                'name' => 'Frameworks & Libraries',
                'description' => 'Web frameworks and JavaScript libraries',
                'slug' => 'frameworks-libraries',
                'type' => CategoryType::SKILL,
                'color' => '#84CC16',
                'icon' => 'package',
                'sort_order' => 2,
            ],
            [
                'name' => 'Databases',
                'description' => 'Database management and query languages',
                'slug' => 'databases',
                'type' => CategoryType::SKILL,
                'color' => '#F97316',
                'icon' => 'database',
                'sort_order' => 3,
            ],
            [
                'name' => 'DevOps & Tools',
                'description' => 'Development tools, CI/CD, and deployment',
                'slug' => 'devops-tools',
                'type' => CategoryType::SKILL,
                'color' => '#64748B',
                'icon' => 'tool',
                'sort_order' => 4,
            ],
            [
                'name' => 'Design & UI/UX',
                'description' => 'Design principles and user experience',
                'slug' => 'design-ui-ux',
                'type' => CategoryType::SKILL,
                'color' => '#EC4899',
                'icon' => 'palette',
                'sort_order' => 5,
            ],
        ];

        // Create all categories
        foreach (array_merge($projectCategories, $skillCategories) as $category) {
            Category::create($category);
        }
    }
}
