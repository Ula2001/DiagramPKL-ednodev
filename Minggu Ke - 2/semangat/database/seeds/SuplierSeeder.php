<?php

use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'postal_code' => str_random(10),
            'zip_code' => str_random(10),
            'region' => str_random(10),
            'city' => str_random(10),
            'country' => str_random(10),
            'contact_title' => str_random(10),
            'contact_name' => str_random(10),
            'contact_phone' => str_random(10),
            'contact_fax' => str_random(10),
            'contact_email' => str_random(10).'@gmail.com'
        ]);

        DB::table('suppliers')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'postal_code' => str_random(10),
            'zip_code' => str_random(10),
            'region' => str_random(10),
            'city' => str_random(10),
            'country' => str_random(10),
            'contact_title' => str_random(10),
            'contact_name' => str_random(10),
            'contact_phone' => str_random(10),
            'contact_fax' => str_random(10),
            'contact_email' => str_random(10).'@gmail.com'
        ]);


		DB::table('suppliers')->insert([
		            'name' => str_random(10),
		            'address' => str_random(10),
		            'postal_code' => str_random(10),
		            'zip_code' => str_random(10),
		            'region' => str_random(10),
		            'city' => str_random(10),
		            'country' => str_random(10),
		            'contact_title' => str_random(10),
		            'contact_name' => str_random(10),
		            'contact_phone' => str_random(10),
		            'contact_fax' => str_random(10),
		            'contact_email' => str_random(10).'@gmail.com'
		        ]);

    }
}
