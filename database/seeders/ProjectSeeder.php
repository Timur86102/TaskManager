<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'name' => 'Budget Management Tool',
                'note' => 'Инструмент для управления бюджетом, который помогает пользователям отслеживать свои финансы и расходы.',
                'state_id' => 1,
                'manager_id' => 1
            ], [
                'name' => 'Travel Planner',
                'note' => 'Планировщик путешествий, который помогает организовать поездки, бронировать отели и маршруты.',
                'state_id' => 2,
                'manager_id' => 2
            ], [
                'name' => 'E-Learning Platform',
                'note' => 'Платформа для обучения онлайн, где пользователи могут пройти курсы, просматривать видеоуроки и получать сертификаты.',
                'state_id' => 3,
                'manager_id' => 3
            ]
        ]);
    }
}
