<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProjectState;

class ProjectStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_states')->insert([
            [ 'name' => 'Не начат' ],
            [ 'name' => 'В процессе' ],
            [ 'name' => 'Завершен' ],
            [ 'name' => 'Приостановлен' ],
            [ 'name' => 'Отменен' ]
        ]);
    }
}
