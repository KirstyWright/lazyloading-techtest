<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id'=>1,
            'name'=>'Cats',
            'hex'=>'#67597a'
        ]);
        DB::table('categories')->insert([
            'id'=>2,
            'name'=>'People',
            'hex'=>'#85baa1'
        ]);

        factory(App\Product::class, 200)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
