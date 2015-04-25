<?php

use Illuminate\Database\Seeder;
use App\mktp\entities\Idol;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class IdolsTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Idol::create([
        	
        	//"id" => "1",
        	"name" => "Haruka",
        ]);

    }

}