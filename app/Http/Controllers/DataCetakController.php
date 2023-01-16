<?php

namespace App\Http\Controllers;

use App\Models\DataCetak;
use Illuminate\Http\Request;

class DataCetakController extends Controller
{
    public function countDataCetak()
    {
        $data = DataCetak::countDataCetak();
        return json_encode($data);
    }

    public function getDataCetak(Request $request)
    {
        $data = DataCetak::getDataCetak($request->id, $request->limit, $request->offset);
        return json_encode($data);
    }

    public function createDataCetak(Request $request)
    {
        $request->validate([
            'tahun'=>'required',
            'nip_asal'=>'required',
            'nip_tujuan'=>'required',
            'nama_tujuan'=>'required',
            'jenis'=>'required',
            'nomor'=>'required',
            'tanggal'=>'required',
            'tujuan'=>'required',
            'perihal'=>'required',
        ]);
        DataCetak::create($request);
    }
}
