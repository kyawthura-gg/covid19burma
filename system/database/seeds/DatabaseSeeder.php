<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        $states = array(
            array('name' => 'Yangon'),
            array('name' => 'Mandalay'),
            array('name' => 'Magway'),
            array('name' => 'Sagaing'),
            array('name' => 'Tanintharyi'),
            array('name' => 'Bago'),
            array('name' => 'Naypyitaw'),
            array('name' => 'Ayeyarwady'),
            array('name' => 'Kachin'),
            array('name' => 'Kayah'),
            array('name' => 'Kayin'),
            array('name' => 'Chin'),
            array('name' => 'Mon'),
            array('name' => 'Rakhine'),
            array('name' => 'Shan'),
        );
        DB::table('states')->insert($states);
    }
}
