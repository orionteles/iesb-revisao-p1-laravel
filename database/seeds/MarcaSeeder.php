<?php

use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            ['id'=>1, 'nome'=>'LG'],
            ['id'=>2, 'nome'=>'Samsung'],
            ['id'=>3, 'nome'=>'Apple'],
            ['id'=>4, 'nome'=>'Sony'],
        ]);
    }
}
