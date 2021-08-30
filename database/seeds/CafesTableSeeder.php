 <?php

use Illuminate\Database\Seeder;

class CafesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cafes')->insert([
                'name'=>'YARD Coffee & Craft Chocolate',
                'address'=>'大阪府大阪市天王寺区茶臼山町1-3',
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d')
            ]);
    }
}
