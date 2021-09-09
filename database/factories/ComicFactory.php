<?php

namespace Database\Factories;

use App\Models\Comic;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // passiamo una funzione dove ci restituisce un numero random in base gli elementi presenti nell'array
        /*
        $arrayComics = config('db_factory_comics');
        $rand = rand(0, count( $arrayComics - 1 ));
        */

        return [
            //
        ];
    }
}
