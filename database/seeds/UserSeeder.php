<?php

use Illuminate\Database\Seeder;

use App\Buyer;
use App\Logistic;
use App\Lumad;
use App\Seller;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_logistic = new User;

        $user_logistic->id = 1;
        $user_logistic->email = 'logistic.asiong@katubo.com';
        $user_logistic->email_verified_at = now();
        $user_logistic->password = Hash::make('logistic123');
        $user_logistic->type = 'Logistic';

        if($user_logistic->save()) {
            Logistic::insert([
                [
                    'user_id' => $user_logistic->id,
                    'name' => 'Asiong',
                    'address' => 'Tondo, Manila'
                ]
            ]);
        }

        Lumad::insert([
            [
                'ethnicity' => 'Igorot'
            ]
        ]);

        $user_seller = new User;

        $user_seller->id = 2;
        $user_seller->email = 'seller.ilocandia@katubo.com';
        $user_seller->email_verified_at = now();
        $user_seller->password = Hash::make('seller123');
        $user_seller->type = 'Seller';

        if($user_seller->save()) {
            Seller::insert([
                'user_id' => $user_seller->id,
                'lumad_id' => 1,
                'logistic_id' => 1,
                'name' => 'Ilocandia',
                'address' => 'Tondo, Manila'
            ]);
        }

        $user_buyer = new User;

        $user_buyer->id = 3;
        $user_buyer->email = 'buyer.aetak@katubo.com';
        $user_buyer->email_verified_at = now();
        $user_buyer->password = Hash::make('buyer123');
        $user_buyer->type = 'Buyer';

        if($user_buyer->save()) {
            Buyer::insert([
                'user_id' => $user_buyer->id,
                'first_name' => 'Juan',
                'last_name' => 'Dela Cruz',
                'birth_date' => '1980-01-01',
                'sex' => 'Male',
                'current_address' => 'Tondo, Manila'
            ]);
        }
    }
}
