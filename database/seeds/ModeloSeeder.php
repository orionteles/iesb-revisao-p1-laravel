<?php

use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelos')->insert([
            ['nome'=>'LG K1', 'marca_id'=>1],
            ['nome'=>'LG K3', 'marca_id'=>1],
            ['nome'=>'LG K4', 'marca_id'=>1],

            ['nome'=>'J8', 'marca_id'=>2],
            ['nome'=>'S10', 'marca_id'=>2],
            ['nome'=>'A7', 'marca_id'=>2],
            ['nome'=>'Samsung TV', 'marca_id'=>2],
            ['nome'=>'Samsung Watch', 'marca_id'=>2],

            ['nome'=>'Iphone XI', 'marca_id'=>3],
            ['nome'=>'Iphone X', 'marca_id'=>3],
            ['nome'=>'MACBOOK AIR PRO', 'marca_id'=>3],
            ['nome'=>'Apple Watch', 'marca_id'=>3],

            ['nome'=>'Sony TV', 'marca_id'=>4],
            ['nome'=>'Sony Celular', 'marca_id'=>4],
            ['nome'=>'Sony Relógio', 'marca_id'=>4],
            ['nome'=>'PlayStation 3', 'marca_id'=>4],
            ['nome'=>'PlayStation 4', 'marca_id'=>4],
            ['nome'=>'PlayStation 5', 'marca_id'=>4],
        ]);
    }
}
