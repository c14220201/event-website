<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organizer;
class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Organizer::create([
            'name' => 'Organizer 1',
            'description' => 'Description 1',
            'facebook_link' => 'https://www.facebook.com/organizer1',
            'x_link' => 'https://www.x.com/organizer1',
            'website_link' => 'https://www.organizer1.com',
            'active' => 1
        ]);
        Organizer::create([
            'name' => 'Organizer 2',
            'description' => 'Description 2',
            'facebook_link' => 'https://www.facebook.com/organizer2',
            'x_link' => 'https://www.x.com/organizer2',
            'website_link' => 'https://www.organizer2.com',
            'active' => 1
        ]);
        Organizer::create([
            'name' => 'Organizer 3',
            'description' => 'Description 3',
            'facebook_link' => 'https://www.facebook.com/organizer3',
            'x_link' => 'https://www.x.com/organizer3',
            'website_link' => 'https://www.organizer3.com',
            'active' => 1
        ]);
        Organizer::create([
            'name' => 'Organizer 4',
            'description' => 'Description 4',
            'facebook_link' => 'https://www.facebook.com/organizer4',
            'x_link' => 'https://www.x.com/organizer4',
            'website_link' => 'https://www.organizer4.com',
            'active' => 1
        ]);
        Organizer::create([
            'name' => 'Organizer 5',
            'description' => 'Description 5',
            'facebook_link' => 'https://www.facebook.com/organizer5',
            'x_link' => 'https://www.x.com/organizer5',
            'website_link' => 'https://www.organizer5.com',
            'active' => 1
        ]);

    }
}
