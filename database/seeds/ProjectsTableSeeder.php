<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder {
    public function run() {
        DB::table('projects')->delete();

        $projects = array(
            ['id' => 1, 'name' => 'P1', 'slug' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'P2', 'slug' => 'project-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'P3', 'slug' => 'project-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        DB::table('projects')->insert($projects);
    }
}
