<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create(); 
    }
}
