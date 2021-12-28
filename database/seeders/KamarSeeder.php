<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar = [
            [
                'id_hotel' => 1,
                'jenis_kamar' => 'President Suite',
                'hrg_per_mlm' => 850000,
            ],
            [
                'id_hotel' => 1,
                'jenis_kamar' => 'Suite',
                'hrg_per_mlm' => 750000,
            ],
            [
                'id_hotel' => 1,
                'jenis_kamar' => 'Family',
                'hrg_per_mlm' => 550000,
            ],
            [
                'id_hotel' => 1,
                'jenis_kamar' => 'Super Executive',
                'hrg_per_mlm' => 450000,
            ],
            [
                'id_hotel' => 1,
                'jenis_kamar' => 'Executive',
                'hrg_per_mlm' => 350000,
            ],
            [
                'id_hotel' => 2,
                'jenis_kamar' => 'Superior - Adult Only',
                'hrg_per_mlm' => 225000,
            ],
            [
                'id_hotel' => 2,
                'jenis_kamar' => 'Suite',
                'hrg_per_mlm' => 275000,
            ],
            [
                'id_hotel' => 2,
                'jenis_kamar' => 'Deluxe',
                'hrg_per_mlm' => 325000,
            ],
            [
                'id_hotel' => 2,
                'jenis_kamar' => 'President Suite',
                'hrg_per_mlm' => 975000,
            ],
            [
                'id_hotel' => 3,
                'jenis_kamar' => 'Deluxe Room',
                'hrg_per_mlm' => 388000,
            ],
            [
                'id_hotel' => 3,
                'jenis_kamar' => 'Deluxe Suite Jr',
                'hrg_per_mlm' => 425000,
            ],
            [
                'id_hotel' => 3,
                'jenis_kamar' => 'Deluxe Suite',
                'hrg_per_mlm' => 488000,
            ],
            [
                'id_hotel' => 3,
                'jenis_kamar' => 'Executive',
                'hrg_per_mlm' => 588000,
            ],
            [
                'id_hotel' => 3,
                'jenis_kamar' => 'Family',
                'hrg_per_mlm' => 788000,
            ],
            [
                'id_hotel' => 3,
                'jenis_kamar' => 'VIP',
                'hrg_per_mlm' => 988000,
            ],
        ];

        DB::table('kamar')->insert($kamar);
    }
}
