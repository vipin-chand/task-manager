<?php

namespace Database\Seeders;

use App\Models\IssueStatus;
use Illuminate\Database\Seeder;

class IssueStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $issueStatus = [
            'To Do',
            'In Progress',
            'QA Ready',
            'Testing',
            'Done'
        ];

        foreach ($issueStatus as $item){
            IssueStatus::create(['name' => $item]);
        }
    }
}
