<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'notif_id' => 1,
                'content' => 'Use code MINION2024 to get 10% off Filet Mignon! Redeemable by January 30, 2024.

- CAE Cafeteria',
                'date_sent' => '2024-01-29 00:00:00',
                'marked_seen' => 1,
                'redirect' => '/cafeteria',
                'user_id' => 2,
            ),
            1 => 
            array (
                'notif_id' => 2,
                'content' => 'Your delivery is arriving soon. Please prepare the exact amount for payment. Thank you!

- CAE Cafeteria',
                'date_sent' => '2024-01-29 00:00:00',
                'marked_seen' => 1,
                'redirect' => '/orders',
                'user_id' => 2,
            ),
            2 => 
            array (
                'notif_id' => 4,
                'content' => 'Your order is on the way! Please be ready with your payment.',
                'date_sent' => '2024-01-30 14:40:53',
                'marked_seen' => 0,
                'redirect' => '/orders/7',
                'user_id' => 2,
            ),
            3 => 
            array (
                'notif_id' => 5,
                'content' => 'Your order has been delivered, enjoy! Please mark the order as received.',
                'date_sent' => '2024-01-30 14:41:22',
                'marked_seen' => 0,
                'redirect' => '/orders/7',
                'user_id' => 2,
            ),
        ));
        
        
    }
}