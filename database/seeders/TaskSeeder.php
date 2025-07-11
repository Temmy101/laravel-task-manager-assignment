<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Go To The Market',
            'description' => 'Buy groceries and other essentials.',
            'is_completed' => false,
        ]);

        Task::create([
            'title' => 'Go To The Filling Statoion',
            'description' => 'Fill up the car with petrol.',
            'is_completed' => true,
        ]);

        Task::create([
            'title' => 'Go To the Bank',
            'description' => 'Deposit the cheque and withdraw cash.',
            'is_completed' => false,
        ]);
    }
}
