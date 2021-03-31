<?php

namespace Database\Seeders;

use App\Models\Song;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Container\Container;

class SongsSeeder extends Seeder
{

    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	foreach (range(1,10) as $index) {
            $title = $this->faker->sentence(4);
	        Song::create([
                'title' => $title,
                'user_id' => rand(2,11),
                'author' => $this->faker->name,
                'lyrics' => $this->faker->realText(),
                'slug' => strtolower(str_replace(' ', '-',$title))
	        ]);
	    }
    }
}
