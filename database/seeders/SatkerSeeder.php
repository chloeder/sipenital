<?php

namespace Database\Seeders;

use App\Models\Satker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SatkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $satker = [
            'PIMPINAN', 'BAG OPS', 'BAG REN', 'BAG SDM', 'BAG LOG', 'SIWAS', 'SIPROPAM', 'SIHUMAS', 'SIKUM',  'SI TIK', 'SIUM', 'SPKT', 'SAT INTELKAM', 'SAT RESKRIM', 'SATRES NARKOBA', 'SAT BINMAS', 'SAT SAMAPTA', 'SAT LANTAS', 'SAT PAMOBVIT', 'SAT POLAIRUD', 'SAT TAHTI', 'SIKEU', 'SIDOKKES',
            'POLSEK TONDANO', 'POLSEK ERIS', 'POLSEK KOMBI', 'POLSEK KAKAS', 'POLSEK LANGOWAN', 'POLSEK KAWANGKOAN', 'POLSEK REMBOKEN', 'POLSEK TOULIMAMBOT', 'POLSEK LEMBEAN TIMUR', 'POLSEK TOMPASO', 'POLSEK LANGOWAN BARAT'
        ];
        foreach ($satker as $s) {
            Satker::create([
                'nama_satker' => $s,
            ]);
        }
    }
}
