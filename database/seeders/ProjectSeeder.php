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
            ], [
                'name' => 'Talk',
                'note' => 'Веб-мессенджер для общения.',
                'state_id' => 4,
                'manager_id' => 1
            ], [
                'name' => 'Task Tracking App',
                'note' => 'Приложение для отслеживания задач, где пользователи могут устанавливать приоритеты, сроки и статусы задач.',
                'state_id' => 5,
                'manager_id' => 2
            ], [
                'name' => 'Health and Wellness Platform',
                'note' => 'Платформа для здоровья и благополучия, предоставляющая информацию о фитнесе, питании и здоровом образе жизни.',
                'state_id' => 1,
                'manager_id' => 3
            ], [
                'name' => 'Event Management System',
                'note' => 'Система управления мероприятиями, где пользователи могут создавать и продвигать события онлайн.',
                'state_id' => 2,
                'manager_id' => 1
            ]
        ]);
    }
}
