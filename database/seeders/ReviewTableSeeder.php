<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::insert([
            [
                'text' => 'Great service, efficient communication and a really easy way to get a mortgage with lots of help and support to get the right deal.',
                'author_first_name' => 'Michael',
                'author_last_name' => 'Sadie',
            ],
            [
                'text' => 'The service is smooth and straightforward. My advisor was helpful. I would recommend deal direct.',
                'author_first_name' => 'Sonny',
                'author_last_name' => 'James',
            ],
            [
                'text' => 'The CashForCars team represents among the highest levels of customer service I have experienced. Information was accurate, responses to queries were turned around very fast. Answers were clear and where necessary detailed enough for us to make informed decisions quickly, minimising the end to end time to process complex transactions among a number of parties.',
                'author_first_name' => 'Addison',
                'author_last_name' => 'Wilson',
            ],
            [
                'text' => 'A fantastic organisation! Great cutomer support from beginning to end of the process. The team are really informed and go the extra mile at every stage. I would recommend them unreservedly.',
                'author_first_name' => 'Iyana',
                'author_last_name' => 'Coleman',
            ],
            [
                'text' => 'We were provided excellent customer service. All responses were prompt and professional. Clearly, the upfront statement on our policy stated it was limited which told us that our preliminary research was not well thought out.',
                'author_first_name' => 'Peter',
                'author_last_name' => 'Decker',
            ],
        ]);
    }
}
