<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Bank;
use App\Models\Banner;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

         Product::create([
         'GTO' => 'GTO',
         'SORD' => 'SORD',
         '201' => '201',
         'KORD' => 'KORD',
         'Wedding' => 'Wedding',
         'Church' => 'Church',
         'Business' => 'Business',
         'Graduation' => 'Graduation',
        'Art-Paper' => 'Art-Paper',
         'Bond' => 'Bond',
         '100gram' => '100gram',
         '80gram' => '80gram',
         '70gram' => '70gram',
         '60gram' => '60gram',
         'A5' => 'A5',
         'A4' => 'A4',
         'A3' => 'A3',
         '1-Color' => '1-Color',
         '2-Color' => '2-Color',
         '3-Color' => '3-Color',
         '4-Color' => '4-Color',
         'spiral' => 'Spiral',
         'Board' => 'Board',
         ]);

         Bank::create([
            'name' => 'KPD-Prints',
            'number' => '6042860266',
            'account' => 'Keystone Bank'
         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
