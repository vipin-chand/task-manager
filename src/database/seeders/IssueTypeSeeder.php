<?php

namespace Database\Seeders;

use App\Models\IssueType;
use Illuminate\Database\Seeder;

class IssueTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $issueTypes = ['Story', 'Bug', 'feature'];

        foreach ($issueTypes as $item){
            IssueType::create([
                'name' => $item,
                'is_active' => true,
                'description' => 'This is some random string'
            ]);
        }
    }
}
