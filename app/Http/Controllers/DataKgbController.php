<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\DataKgb;
use Illuminate\Http\Request;

class DataKgbController extends Controller
{
    public function count()
    {
        $data   = DataKgb::countDataKgb();
        return response()->json(['Data'=>$data], 200);
    }

    public function getDataKgb(Request $request)
    {
        $data   =   DataKgb::getDataKgb($request->id, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function findDataKgb(Request $request)
    {
        $data   =   DataKgb::findDataKgb($request->nip, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function getKgb($nip)
    {
        $data   =   DataKgb::getKgb($nip);
        return response()->json(['Data'=>$data], 200);
    }

    public function create(Request $request)
    {  
        DataKgb::create([
            'bulan'=>$request->bulan,
            'tahun'=>$request->tahun,
            'nip'=>$request->nip,
            'kdgol'=>$request->kdgol,
            'jabatan'=>$request->jabatan,
            'gapok_baru'=>$request->gapok_baru,
            'mkt_baru'=>$request->mkt_baru,
            'mkt_baru'=>$request->mkt_baru,
            'mkb_baru'=>$request->mkb_baru,
            'kdgol_baru'=>$request->kdgol_baru,
            'tmt_baru'=>$request->tmt_baru,
            'no_kgb_baru'=>$request->no_kgb_baru,
            'tgl_kgb_baru'=>$request->tgl_kgb_baru,
            'penerbit_baru'=>$request->penerbit_baru,
            'gapok_lama'=>$request->gapok_lama,
            'mkt_lama'=>$request->mkt_lama,
            'mkt_lama'=>$request->mkt_lama,
            'mkb_lama'=>$request->mkb_lama,
            'kdgol_lama'=>$request->kdgol_lama,
            'tmt_lama'=>$request->tmt_lama,
            'no_kgb_lama'=>$request->no_kgb_lama,
            'tgl_kgb_lama'=>$request->tgl_kgb_lama,
            'penerbit_lama'=>$request->penerbit_lama,
            'status'=>$request->status,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Data was successfully added'
        ], 200);
    }

    public function update(Request $request, DataKgb $dataKgb)
    {
        $dataKgb->update([
            'bulan'=>$request->bulan,
            'tahun'=>$request->tahun,
            'nip'=>$request->nip,
            'kdgol'=>$request->kdgol,
            'jabatan'=>$request->jabatan,
            'gapok_baru'=>$request->gapok_baru,
            'mkt_baru'=>$request->mkt_baru,
            'mkt_baru'=>$request->mkt_baru,
            'mkb_baru'=>$request->mkb_baru,
            'kdgol_baru'=>$request->kdgol_baru,
            'tmt_baru'=>$request->tmt_baru,
            'no_kgb_baru'=>$request->no_kgb_baru,
            'tgl_kgb_baru'=>$request->tgl_kgb_baru,
            'penerbit_baru'=>$request->penerbit_baru,
            'gapok_lama'=>$request->gapok_lama,
            'mkt_lama'=>$request->mkt_lama,
            'mkt_lama'=>$request->mkt_lama,
            'mkb_lama'=>$request->mkb_lama,
            'kdgol_lama'=>$request->kdgol_lama,
            'tmt_lama'=>$request->tmt_lama,
            'no_kgb_lama'=>$request->no_kgb_lama,
            'tgl_kgb_lama'=>$request->tgl_kgb_lama,
            'penerbit_lama'=>$request->penerbit_lama,
            'status'=>$request->status,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Data was successfully updated'
        ], 200);
    }

    public function delete(DataKgb $dataKgb)
    {
        $dataKgb->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data was successfully deleted'
        ], 200);
    }
}
