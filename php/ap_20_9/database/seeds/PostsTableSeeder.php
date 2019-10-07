<?php

use Illuminate\Database\Seeder;
class PostsTableSeeder extends Seeder
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
            DB::table('posts')->insert([
                'title'=>$hjhj->sentence($nbWords = 6, $variableNbWords = true) ,
                'description'=>$hjhj->sentence($nbWords = 6, $variableNbWords = true)
            ]);
        }
    }
}
