<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
                'name' => 'Создание проекта',
                'note' => 'Инициализация проекта встроенными инструментами используемого фреймворка.',
                'state_id' => 3,
                'user_id' => 1,
                'project_id' => 1
            ], [
                'name' => 'Добавление классов',
                'note' => 'Добавлены классы, описывающие модели данных.',
                'state_id' => 1,
                'user_id' => 2,
                'project_id' => 2
            ], [
                'name' => 'Добавление ресурсов',
                'note' => 'Добавлены необходимые ресурсы.',
                'state_id' => 2,
                'user_id' => 3,
                'project_id' => 3
            ], [
                'name' => 'Исправлены ошибки.',
                'note' => 'Исправлены ошибки на клиенте.',
                'state_id' => 3,
                'user_id' => 1,
                'project_id' => 4
            ], [
                'name' => 'Тестирование',
                'note' => 'Тестирование серверной части.',
                'state_id' => 2,
                'user_id' => 2,
                'project_id' => 5
            ], [
                'name' => 'Создание проекта',
                'note' => 'Инициализация проекта встроенными инструментами используемого фреймворка.',
                'state_id' => 3,
                'user_id' => 1,
                'project_id' => 6
            ], [
                'name' => 'Добавление классов',
                'note' => 'Добавлены классы, описывающие модели данных.',
                'state_id' => 1,
                'user_id' => 2,
                'project_id' => 7
            ], [
                'name' => 'Добавление ресурсов',
                'note' => 'Добавлены необходимые ресурсы.',
                'state_id' => 2,
                'user_id' => 3,
                'project_id' => 1
            ], [
                'name' => 'Исправлены ошибки.',
                'note' => 'Исправлены ошибки на клиенте.',
                'state_id' => 3,
                'user_id' => 1,
                'project_id' => 2
            ], [
                'name' => 'Тестирование',
                'note' => 'Тестирование серверной части.',
                'state_id' => 2,
                'user_id' => 2,
                'project_id' => 3
            ]
        ]);
    }
}
