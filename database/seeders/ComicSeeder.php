<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Comic::factory(10)->create();

        $arrayComics = config('db_factory_comics');

        foreach($arrayComics as $item){
            $comics = new Comic();
            $comics->title = $item['title'];
            $comics->description = $item['description'];
            $comics->thumb = $item['thumb'];
            $comics->price = $item['price'];
            $comics->series = $item['series'];
            $comics->sale_date = $item['sale_date'];
            $comics->type = $item['type'];
            $comics->save();
        }

    }
}
