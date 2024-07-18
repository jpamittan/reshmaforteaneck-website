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
        Event::truncate();

        $events = [
            [
                'title' => 'Reshma for Teaneck launch to family and friends',
                'images' => [
                    'RESHMA20249.webp',
                    'RESHMA202486.webp',
                    'RESHMA202489.webp',
                    'RESHMA202498.webp',
                    'RESHMA2024115.webp',
                    'RESHMA2024130.webp',
                    'RESHMA2024140.webp',
                    'RESHMA2024154.webp',
                    'RESHMA2024161.webp',
                    'RESHMA2024185.webp',
                    'RESHMA2024209.webp',
                    'RESHMA2024217.webp',
                    'RESHMA2024221.webp',
                    'RESHMA2024235.webp',
                    'RESHMA2024265.webp',
                    'RESHMA2024297.webp',
                    'RESHMA2024406.webp',
                    'RESHMA2024427.webp',
                    'RESHMA2024465.webp',
                    'RESHMA2024474.webp',
                    'RESHMA2024533.webp',
                    'RESHMA2024564.webp',
                    'RESHMA2024708.webp',
                    'RESHMA2024729.webp',
                    'RESHMA2024737.webp',
                    'RESHMA2024750.webp',
                    'RESHMA2024762.webp',
                    'RESHMA2024774.webp',
                    'RESHMA2024781.webp',
                    'RESHMA2024800.webp',
                    'RESHMA2024807.webp',
                    'RESHMA2024843.webp',
                    'RESHMA2024861.webp',
                    'RESHMA2024878.webp',
                ],
                'videos' => [],
                'details' => 'Reshma launch campaign 2024.',
                'event_date' => '2024-06-27',
            ],
            [
                'title' => 'One Town One Vote Campaign',
                'images' => [
                    '1.webp',
                    '2.webp',
                ],
                'videos' => [],
                'details' => 'Vote YES twice. Yes to question 1: Community Choice Aggregation and Yes to question 2: Do you want the May elections to be moved to November.',
                'event_date' => '2024-07-11',
            ],
            [
                'title' => 'Live podcast with Tevra Francis of NJ in Color fame',
                'images' => [
                    'youtube.jpg'
                ],
                'videos' => [],
                'details' => 'Click here to watch <u><a href="https://www.youtube.com/watch?v=Y9Aw7CdOU6w" color="blue">https://www.youtube.com/watch?v=Y9Aw7CdOU6w</a></u>',
                'event_date' => '2024-08-18',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
