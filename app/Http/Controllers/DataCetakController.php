<?php

namespace App\Http\Controllers;

use App\Models\DataCetak;
use Illuminate\Http\Request;

class DataCetakController extends Controller
{
    
    public function countDataCetak()
    {
        $data = DataCetak::countDataCetak();
        return response()->json(['Data'=>$data], 200);
    }

    public function getDataCetak(Request $request)
    {
        $data = DataCetak::getDataCetak($request->id, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function findDataCetak(Request $request)
    {
        $data = DataCetak::findDataCetak($request->keyword, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
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

        DataCetak::create([
            'tahun'=>$request->tahun,
            'nip_asal'=>$request->nip_asal,
            'nip_tujuan'=>$request->nip_tujuan,
            'nama_tujuan'=>$request->nama_tujuan,
            'jenis'=>$request->jenis,
            'nomor'=>$request->nomor,
            'tanggal'=>$request->tanggal,
            'tujuan'=>$request->tujuan,
            'perihal'=>$request->perihal,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Data was successfully added'
        ], 200);
    }

    public function updateDataCetak(Request $request, DataCetak $DataCetak)
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

        $DataCetak->update([
            'tahun'=>$request->tahun,
            'nip_asal'=>$request->nip_asal,
            'nip_tujuan'=>$request->nip_tujuan,
            'nama_tujuan'=>$request->nama_tujuan,
            'jenis'=>$request->jenis,
            'nomor'=>$request->nomor,
            'tanggal'=>$request->tanggal,
            'tujuan'=>$request->tujuan,
            'perihal'=>$request->perihal,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Data was successfully changed'
        ], 200);
    }

    public function deleteDataCetak(DataCetak $DataCetak)
    {
        $DataCetak->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data was successfully deleted'
        ], 200);
    }

    public function getTahunAsal($nip)
    {
        $data = DataCetak::getTahunAsal($nip);
        return response()->json(['Data'=>$data], 200);
    }

    public function getCetakAsal(Request $request)
    {
        $data = DataCetak::getCetakAsal($request->nip, $request->tahun, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function findCetakAsal(Request $request)
    {
        $data = DataCetak::findCetakAsal($request->nip, $request->tahun, $request->keyword, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function countCetakAsal(Request $request)
    {
        $data = DataCetak::countCetakAsal($request->nip, $request->tahun);
        return response()->json(['Data'=>$data], 200);
    }

    public function getTahunTujuan($nip)
    {
        $data = DataCetak::getTahunTujuan($nip);
        return response()->json(['Data'=>$data], 200);
    }

    public function getCetakTujuan(Request $request)
    {
        $data = DataCetak::getCetakTujuan($request->nip, $request->tahun, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function findCetakTujuan(Request $request)
    {
        $data = DataCetak::findCetakTujuan($request->nip, $request->tahun, $request->keyword, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function countCetakTujuan(Request $request)
    {
        $data = DataCetak::countCetakTujuan($request->nip, $request->tahun);
        return response()->json(['Data'=>$data], 200);
    }

    public function getTahunRiwayat($nip)
    {
        $data = DataCetak::getTahunRiwayat($nip);
        return response()->json(['Data'=>$data], 200);
    }

    public function getCetakRiwayat(Request $request)
    {
        $data = DataCetak::getCetakRiwayat($request->nip, $request->tahun, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function findCetakRiwayat(Request $request)
    {
        $data = DataCetak::findCetakRiwayat($request->nip, $request->tahun, $request->keyword, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function countCetakRiwayat(Request $request)
    {
        $data = DataCetak::countCetakRiwayat($request->nip, $request->tahun);
        return response()->json(['Data'=>$data], 200);
    }
}
