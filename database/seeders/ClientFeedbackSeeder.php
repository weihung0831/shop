<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClientFeedback;

class ClientFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feedback = [
            [
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'big_name' => 'Moana Michell',
                'small_name' => 'magna aliqua',
            ],
            [
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'big_name' => 'Mike Hamell',
                'small_name' => 'magna aliqua',
            ],
        ];

        foreach ($feedback as $data) {
            ClientFeedback::create($data);
        }
    }
}
