<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventCategory;
class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        EventCategory::create([
            'name' => 'Expo',
            'active' => 1
        ]);
        EventCategory::create([
            'name' => 'Concert',
            'active' => 1
        ]);
        EventCategory::create([
            'name' => 'Conference',
            'active' => 1
        ]);
    }
}
