<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();
        Job::factory(20)->hasAttached($tags)->create(New Sequence(
            [
                'featured' => false,
                'schedule' => 'Full time'
            ],
            [
                'featured' => true,
                'schedule' => 'Part time'
            ]
        ));
    }
}
