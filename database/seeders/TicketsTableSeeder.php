<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 11; $i++)
        \Illuminate\Support\Facades\DB::table('tickets')->insert([
            'From' => 'Москва',
            'To' => 'Санкт-Петербург',
            'Date' => '25.05.2023',
            'Departure' => '10:00',
            'Arrival' => '14:00',
            'Time_in_road' => '4:00',
            'Price' => '5000',
           
        ]);
    }
}
