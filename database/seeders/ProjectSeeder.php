<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(2);
            $project->slug = Str::slug($project->title . '-');
            $project->cover_image = 'placeholders/' . $faker->Image('storage/app/public/placeholders', 600, 300, 'Project', false, false);
            $project->body = $faker->text(150);
            $project->save();
        }
    }
}
