<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Satker;
use App\Models\Personil;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PersonilsImport implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $satker = Satker::where('nama_satker', $row[5])->first();

            Personil::create([
                'nama' => $row[0],
                'pangkat' => $row[1],
                'tmt_pangkat' => Carbon::parse($row[2])->format('Y-m-d'),
                'tmt_berkala' => Carbon::parse($row[3])->format('Y-m-d'),
                'nrp_nip' => $row[4],
                'satker_id' => $satker['id'] ?? null,
                'jabatan' => $row[6],
                'tmt_jabatan' => Carbon::parse($row[7])->format('Y-m-d'),
                'status_marital' => $row[8],
                'nama_isteri_suami' => $row[9],
                'agama' => $row[10],
                'tanggal_lahir' => Carbon::parse($row[11])->format('Y-m-d'),
                'alamat' => $row[12],
                'no_hp' => $row[13],
                'fasilitas_kesehatan' => $row[14],
                'no_bpjs' => $row[15],
                'nik' => $row[16],
                'kasus' => $row[17],
                'keterangan' => $row[18],
            ]);
        }
    }
}
