<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Product::class,10)->create();

        DB::table('currencies')->insert([
            'name'	  => 'Dolar',
            'acronym' => 'USD',
            'sign'	  => '$',
            'rate'	  => 1,
        ]);
        DB::table('currencies')->insert([
            'name'    => 'Bolivar',
            'acronym' => 'VES',
            'sign'    => 'Bs',
            'rate'    => 210000,
        ]);
    }
}
