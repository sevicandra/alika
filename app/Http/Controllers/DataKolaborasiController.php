<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKolaborasi;
use Illuminate\Support\Facades\Validator;

class DataKolaborasiController extends Controller
{
    public function count()
    {
        $data   = DataKolaborasi::countDataKolaborasi();
        return response()->json(['Data'=>$data], 200);
    }

    public function getDataKolaborasi(Request $request)
    {
        $data   =   DataKolaborasi::getDataKolaborasi($request->id, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function findDataKolaborasi(Request $request)
    {
        $data   =   DataKolaborasi::findDataKolaborasi($request->keyword, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'=>'required',
            'url'=>'required',
            'keterangan'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                 'status'=>false,
                 'message'=>$validator->errors()
             ], 422);
        }

        DataKolaborasi::create([
            'nama'=>$request->nama,
            'url'=>$request->url,
            'keterangan'=>$request->keterangan,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Data was successfully added'
        ], 200);
    }

    public function update(Request $request, DataKolaborasi $dataKolaborasi)
    {
        $validator = Validator::make($request->all(), [
            'nama'=>'required',
            'url'=>'required',
            'keterangan'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                 'status'=>false,
                 'message'=>$validator->errors()
             ], 422);
        }
        
        $dataKolaborasi->update([
            'nama'=>$request->nama,
            'url'=>$request->url,
            'keterangan'=>$request->keterangan,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Data was successfully changed'
        ], 200);
    }

    public function delete(DataKolaborasi $dataKolaborasi)
    {
        $dataKolaborasi->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data was successfully deleted'
        ], 200);
    }
}
