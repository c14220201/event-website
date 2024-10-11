<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Factory as Faker;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        Event::create([
            'title' => 'Event 1',
            'description' => $faker->text,
            'date' => '2021-01-01',
            'start_time' => '10:00:00',
            'venue' => 'venue 1',
            'active' => 1,
            'organizer_id' => 1,
            'event_category_id' => 1,
            'tags' => 'tag1, tag2'
        ]);
        Event::create([
            'title' => 'Event 2',
            'description' => $faker->text,
            'date' => '2021-02-01',
            'start_time' => '11:00:00',
            'venue' => 'venue 2',
            'active' => 1,
            'organizer_id' => 2,
            'event_category_id' => 2,
            'tags' => 'tag3, tag4'
        ]);
        Event::create([
            'title' => 'Event 3',
            'description' => $faker->text,
            'date' => '2021-03-01',
            'start_time' => '12:00:00',
            'venue' => 'venue 3',
            'active' => 1,
            'organizer_id' => 3,
            'event_category_id' => 3,
            'tags' => 'tag5, tag6'
        ]);
        Event::create([
            'title' => 'Event 4',
            'description' => $faker->text,
            'date' => '2021-04-01',
            'start_time' => '13:00:00',
            'venue' => 'venue 4',
            'active' => 1,
            'organizer_id' => 4,
            'event_category_id' => 1,
            'tags' => 'tag7, tag8'
        ]);
        Event::create([
            'title' => 'Event 5',
            'description' => $faker->text,
            'date' => '2021-05-01',
            'start_time' => '14:00:00',
            'venue' => 'venue 5',
            'active' => 1,
            'organizer_id' => 5,
            'event_category_id' => 2,
            'tags' =>'tags9, tag10'
        ]);
        Event::create([
            'title' => 'Event 6',
            'description' => $faker->text,
            'date' => '2021-06-01',
            'start_time' => '15:00:00',
            'venue' => 'venue 6',
            'active' => 1,
            'organizer_id' => 1,
            'event_category_id' => 3,
            'tags' => 'tag11, tag12'
        ]); 
    }

}
