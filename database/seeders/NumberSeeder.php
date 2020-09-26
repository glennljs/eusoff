<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class NumberSeeder extends SpreadsheetSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->file = "/database/seeds/numbers.xlsx";
        $this->defaults = [
            'created_by' => 'seeder', 
            'updated_by' => 'seeder', 
            'taken' => 'false'];
        parent::run();
    }
}
