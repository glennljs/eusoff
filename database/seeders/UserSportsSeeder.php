<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class UserSportsSeeder extends SpreadsheetSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->file = "/database/seeds/user_sports.xlsx";
        $this->defaults = ['created_by' => 'seeder', 'updated_by' => 'seeder'];
        parent::run();
    }
}
