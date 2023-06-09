<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $projects = new Project();
            $projects->titolo = $faker->sentence(3);
            $projects->descrizione =$faker->text();
            $projects->slug = Str::slug($projects->titolo, '-');
            $projects->save();

        }
    }
}
