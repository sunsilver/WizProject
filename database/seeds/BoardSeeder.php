<?php

use Illuminate\Database\Seeder;
use App\Board;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Board::class)->create();
        factory(Board::class, 100)->create();
    }
}
