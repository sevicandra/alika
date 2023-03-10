<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\DataHukdis;
use Illuminate\Http\Request;


class DataHukdisController extends Controller
{
    public function count()
    {
        $data = DataHukdis::countDataHukdis();
        return response()->json(['Data'=>$data], 200);
    }

    public function getDataHukdis(Request $request)
    {
        $data = DataHukdis::getDataHukdis($request->id, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function findDataHukdis(Request $request)
    {
        $data = DataHukdis::findDataHukdis($request->keyword, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function getHukdis($nip)
    {
        $data = DataHukdis::getHukdis($nip);
        return response()->json(['Data'=>$data], 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bulan'=>'required|min:2|max:2',
            'tahun'=>'required|min:4|max:4',
            'nip'=>'required|min:18|max:18',
            'no_sk'=>'required',
            'tgl_sk'=>'required',
            'tgl_mulai'=>'required',
            'tgl_selesai'=>'required',
            'uraian'=>'required',
            'penerbit'=>'required',
            'status'=>'required',
        ]);

        if ($validator->fails()) {
           return response()->json([
                'status'=>false,
                'message'=>$validator->errors()
            ], 422);
        }

        DataHukdis::create([
            'bulan'=>$request->bulan,
            'tahun'=>$request->tahun,
            'nip'=>$request->nip,
            'no_sk'=>$request->no_sk,
            'tgl_sk'=>$request->tgl_sk,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_selesai'=>$request->tgl_selesai,
            'uraian'=>$request->uraian,
            'penerbit'=>$request->penerbit,
            'status'=>$request->status,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Data was successfully added'
        ], 200);
    }

    public function update(Request $request, DataHukdis $dataHukdis)
    {
        $validator = Validator::make($request->all(), [
            'bulan'=>'required|min:2|max:2',
            'tahun'=>'required|min:4|max:4',
            'nip'=>'required|min:18|max:18',
            'no_sk'=>'required',
            'tgl_sk'=>'required',
            'tgl_mulai'=>'required',
            'tgl_selesai'=>'required',
            'uraian'=>'required',
            'penerbit'=>'required',
            'status'=>'required',
        ]);

        if ($validator->fails()) {
           return response()->json([
                'status'=>false,
                'message'=>$validator->errors()
            ], 422);
        }

        $dataHukdis->update([
            'bulan'=>$request->bulan,
            'tahun'=>$request->tahun,
            'nip'=>$request->nip,
            'no_sk'=>$request->no_sk,
            'tgl_sk'=>$request->tgl_sk,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_selesai'=>$request->tgl_selesai,
            'uraian'=>$request->uraian,
            'penerbit'=>$request->penerbit,
            'status'=>$request->status,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Data was successfully changed'
        ], 200);
    }

    public function delete(DataHukdis $dataHukdis)
    {
        $dataHukdis->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data was successfully deleted'
        ], 200);
    }
}
