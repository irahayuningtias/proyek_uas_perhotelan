<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotel = [
            [   'nama_hotel' => 'Patria Palace Hotel',
                'alamat_hotel' => 'Jl. Mastrip No.56, Kepanjen Kidul, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66111',
                'tlpn_hotel' => '(0342) 816333',
            ],
            [   'nama_hotel' => 'Grand Mansion Hotel',
                'alamat_hotel' => 'Jl. Melati No.90, Kepanjen Kidul, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66117',
                'tlpn_hotel' => '(0342) 809667',
            ],
            [   'nama_hotel' => 'Puri Perdana',
                'alamat_hotel' => 'Jl. Anjasmoro No.78, Kepanjen Lor, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66117',
                'tlpn_hotel' => '(0342) 801884',
            ],
        ];

        DB::table('hotel')->insert($hotel);
    }
}