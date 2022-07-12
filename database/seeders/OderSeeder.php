<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Oder;
class OderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory()->times(100)->create();
    }
}
