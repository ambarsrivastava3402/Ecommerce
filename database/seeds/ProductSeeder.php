<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                DB::table('products')->insert([
        [

        'name' => 'Lg wing',
        'price' => '150000',
        'category' => 'mobile',
        'gallery' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.yankodesign.com%2F2020%2F09%2F03%2Fthe-lg-wing-presents-a-radically-sensible-evolutionary-step-in-the-future-of-smartphones%2F&psig=AOvVaw1Uy7a2gWWN9i3RP5y08bEW&ust=1605271249866000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIjz1MeD_ewCFQAAAAAdAAAAABAJ',
        
        ],
        [

        'name' => 'asus rog 3',
        'price' => '50000',
        'category' => 'mobile',
        'gallery' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.asus.com%2FPhone%2FROG-Phone-3%2FHelpDesk_BIOS%2F&psig=AOvVaw1jlYxgRt-LspbNu42Di9Fo&ust=1605271434672000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLD625-E_ewCFQAAAAAdAAAAABAD',
        
        ]


        ]);
    }
}
