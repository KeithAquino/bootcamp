<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'order_id' => 3,
                'time_placed' => '2024-01-25 16:38:37',
                'status' => 'finished',
                'user_id' => 2,
            ),
            1 => 
            array (
                'order_id' => 4,
                'time_placed' => '2024-01-25 16:45:06',
                'status' => 'accepted',
                'user_id' => 8,
            ),
            2 => 
            array (
                'order_id' => 5,
                'time_placed' => '2024-01-26 17:06:48',
                'status' => 'finished',
                'user_id' => 2,
            ),
            3 => 
            array (
                'order_id' => 6,
                'time_placed' => '2024-01-26 17:09:53',
                'status' => 'cancelled',
                'user_id' => 2,
            ),
            4 => 
            array (
                'order_id' => 7,
                'time_placed' => '2024-01-30 14:33:26',
                'status' => 'delivered',
                'user_id' => 2,
            ),
        ));
        
        
    }
}