<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    public function allData()
    {
       return [
            [

                'nip' => '1234',
                'nama' => 'Iqfan',
                'mapel' => 'PBO'
            ],
            [
                'nip' => '4321',
                'nama' => 'Khanif',
                'mapel' => 'Basis Data'
            ],
            [
                'nip' => '2341',
                'nama' => 'Tere',
                'mapel' => 'Pemograman Dasar'
            ]
        ];
    }
}
