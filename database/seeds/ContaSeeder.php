<?php

use Illuminate\Database\Seeder;
use App\Models\Conta;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\Models\Conta::class, 3)->make();

        DB::table('conta')->insert($users->toArray());
    }
}
