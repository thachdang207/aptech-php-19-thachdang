<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hjhj=Faker\Factory::create();
        for($i=0;$i<=10;$i++)
        {
            DB::table('users')->insert([
                'name'=>$hjhj->sentence($nbWords = 6, $variableNbWords = true) ,
                'email'=>$hjhj->sentence($nbWords = 6, $variableNbWords = true).'@gmail.com',
                'password'=>$hjhj->sentence($nbWords=6,$variableNbwords=true)
            ]);
        }
    }
}
