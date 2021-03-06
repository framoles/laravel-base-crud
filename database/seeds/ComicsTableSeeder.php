<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dbcomics = config("comics");
        foreach($dbcomics as $comic){
            $newComic = new Comic();
            $newComic->fill($comic);
            $newComic->save();
        }
    }
}
