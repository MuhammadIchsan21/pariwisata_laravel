<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'setting_name' => 'app_name',
            'setting_value' => 'BPN Maps'
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'gmaps_api_key',
            'setting_value' => 'AIzaSyB2C8vk7iaIGmDNt-TfJDQ_mdcyc7VbtTE'
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'latitude_centre',
            'setting_value' => '-1.2596973497754538'
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'longitude_centre',
            'setting_value' => '116.86977680682199'
        ]);
        DB::table('settings')->insert([
            'setting_name' => 'set_zoom',
            'setting_value' => '13'
        ]);
    }
}
