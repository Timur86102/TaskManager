<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TaskState;

class TaskStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('task_states')->insert([
            [ 'name' => 'В работе' ],
            [ 'name' => 'Отменена' ],
            [ 'name' => 'Выполнена' ]
        ]);
    }
}
