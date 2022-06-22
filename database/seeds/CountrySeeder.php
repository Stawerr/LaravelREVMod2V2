<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Country::class,5)->create();
        DB::table('countries')->insert(['name' => 'Portugal','created_at'=>now(),'updated_at'=>now()]);
        DB::table('countries')->insert(['name' => 'Espanha','created_at'=>now(),'updated_at'=>now()]);
        DB::table('countries')->insert(['name' => 'França','created_at'=>now(),'updated_at'=>now()]);
        DB::table('countries')->insert(['name' => 'Polónia','created_at'=>now(),'updated_at'=>now()]);
    }
}
