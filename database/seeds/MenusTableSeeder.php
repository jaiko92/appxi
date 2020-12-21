<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Menu::firstOrCreate([
            'name' => 'admin',
        ]);

        //custom
        Menu::firstOrCreate([
            'name' => 'LandingPage',
        ]);
        Menu::firstOrCreate([
            'name' => 'social',
        ]);
        Menu::firstOrCreate([
            'name' => 'lpa',
        ]);
        Menu::firstOrCreate([
            'name' => 'lpa_social',
        ]);
    }
}
