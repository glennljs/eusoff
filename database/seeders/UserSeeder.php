<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class UserSeeder extends SpreadsheetSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->file = "/database/seeds/users.xlsx";
        $this->hashable = ['password'];
        $this->defaults = ['created_by' => 'seeder', 'updated_by' => 'seeder'];
        parent::run();
    }
}
