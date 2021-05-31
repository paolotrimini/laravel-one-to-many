<?php

use Illuminate\Database\Seeder;

use App\Employee;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 500)

            -> make()
            -> each(function($task){

            $employee = Employee::inRandomOrder() -> first();
            $task -> employee_id = $employee -> id;

            $task -> save();

            });
    }
}
