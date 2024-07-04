<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Event::count()) {
            return;
        }

        $events = [
            [
                'title' => 'Karaoke with Reshma',
                'image' => null,
                'video' => 'events/karaoke.mp4',
                'details' => 'Karaoke contest open mic at Parking lot next to Queen Anne Wine and Spirits Emporium 247 Degraw Ave. Teaneck.',
                'event_date' => '2024-07-03',
            ],
            [
                'title' => 'Parade + table @ Votee Park',
                'image' => null,
                'video' => null,
                'details' => null,
                'event_date' => '2024-07-04',
            ],
            [
                'title' => 'Cedar Lane Cinema / Marquis / screening SUFFRAGETTE',
                'image' => null,
                'video' => null,
                'details' => null,
                'event_date' => '2024-07-11',
            ],
            [
                'title' => 'Teaneck High Auditorium / OPEN TO PUBLIC',
                'image' => null,
                'video' => null,
                'details' => null,
                'event_date' => '2024-07-12',
            ],
            [
                'title' => 'NJ in Color interview with Tevra',
                'image' => null,
                'video' => null,
                'details' => '(TBD) July 14-25, 2024.',
                'event_date' => '2024-07-14',
            ],
            [
                'title' => 'Biker rally',
                'image' => null,
                'video' => null,
                'details' => 'At FDU Motorcycle riding area, North Parking Lot',
                'event_date' => null,
            ],
            [
                'title' => 'Indian Independence day celebration',
                'image' => null,
                'video' => null,
                'details' => 'Launch of cricket club / Honoring Jaffer Ismail for climbing Mt Everest (2024) and Danielle Gee for climbing Mt Kilimanjaro (2023) / Dance party - bhangra',
                'event_date' => '2024-08-16',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
