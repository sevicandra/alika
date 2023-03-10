<?php

namespace App\Http\Controllers;

use App\Models\DataKurang;
use Illuminate\Http\Request;

class DataKurangController extends Controller
{
    public function count()
    {
        $data   = DataKurang::countDataKurang();
        return response()->json(['Data'=>$data], 200);
    }

    public function getDataKurang(Request $request)
    {
        $data   = DataKurang::getDataKurang($request->id, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function findDataKurang(Request $request)
    {
        $data   = DataKurang::findDataKurang($request->nip, $request->tahun, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function getKurang(Request $request, $nip)
    {
        $data   = DataKurang::getKurang($nip, $request->tahun);
        return response()->json(['Data'=>$data], 200);
    }

    public function getTahun(Request $request)
    {
        $data   = DataKurang::getTahun($request->nip);
        return response()->json(['Data'=>$data], 200);
    }

    public function getBulan(Request $request)
    {
        $data   = DataKurang::getBulan($request->nip, $request->tahun);
        return response()->json(['Data'=>$data], 200);
    }

    public function create(Request $request)
    {
        DataKurang::create([
            'kdjns'=>$request->kdjns,
            'kdsatker'=>$request->kdsatker,
            'kdanak'=>$request->kdanak,
            'kdsubanak'=>$request->kdsubanak,
            'kdkawin'=>$request->kdkawin,
            'kdgapok'=>$request->kdgapok,
            'kdjab'=>$request->kdjab,
            'bulan'=>$request->bulan,
            'tahun'=>$request->tahun,
            'nip'=>$request->nip,
            'gapok'=>$request->gapok,
            'tistri'=>$request->tistri,
            'tanak'=>$request->tanak,
            'tumum'=>$request->tumum,
            'ttambumum'=>$request->ttambumum,
            'tstruktur'=>$request->tstruktur,
            'tfungsi'=>$request->tfungsi,
            'bulat'=>$request->bulat,
            'tberas'=>$request->tberas,
            'tpajak'=>$request->tpajak,
            'pberas'=>$request->pberas,
            'tpapua'=>$request->tpapua,
            'tpencil'=>$request->tpencil,
            'tlain'=>$request->tlain,
            'iwp'=>$request->iwp,
            'pph'=>$request->pph,
            'sewarmh'=>$request->sewarmh,
            'tunggakan'=>$request->tunggakan,
            'utanglebih'=>$request->utanglebih,
            'potlain'=>$request->potlain,
            'taperum'=>$request->taperum,
            'bpjs'=>$request->bpjs,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Data was successfully added'
        ], 200);
    }

    public function update(Request $request, DataKurang $dataKurang)
    {
        $dataKurang->update([
            'kdjns'=>$request->kdjns,
            'kdsatker'=>$request->kdsatker,
            'kdanak'=>$request->kdanak,
            'kdsubanak'=>$request->kdsubanak,
            'kdkawin'=>$request->kdkawin,
            'kdgapok'=>$request->kdgapok,
            'kdjab'=>$request->kdjab,
            'bulan'=>$request->bulan,
            'tahun'=>$request->tahun,
            'nip'=>$request->nip,
            'gapok'=>$request->gapok,
            'tistri'=>$request->tistri,
            'tanak'=>$request->tanak,
            'tumum'=>$request->tumum,
            'ttambumum'=>$request->ttambumum,
            'tstruktur'=>$request->tstruktur,
            'tfungsi'=>$request->tfungsi,
            'bulat'=>$request->bulat,
            'tberas'=>$request->tberas,
            'tpajak'=>$request->tpajak,
            'pberas'=>$request->pberas,
            'tpapua'=>$request->tpapua,
            'tpencil'=>$request->tpencil,
            'tlain'=>$request->tlain,
            'iwp'=>$request->iwp,
            'pph'=>$request->pph,
            'sewarmh'=>$request->sewarmh,
            'tunggakan'=>$request->tunggakan,
            'utanglebih'=>$request->utanglebih,
            'potlain'=>$request->potlain,
            'taperum'=>$request->taperum,
            'bpjs'=>$request->bpjs,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Data was successfully changed'
        ], 200);
    }

    public function delete(DataKurang $dataKurang)
    {
        $dataKurang->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data was successfully deleted'
        ], 200);
    }
}
