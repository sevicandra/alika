<?php

namespace App\Http\Controllers;

use App\Models\DataGaji;
use Illuminate\Http\Request;

class DataGajiController extends Controller
{
    public function countDataGaji()
    {
        $data = DataGaji::countDataGaji();
        return response()->json(['Data'=>$data], 200);
    }

    public function getDataGaji(Request $request)
    {
        $data = DataGaji::getDataGaji($request->id, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function findDataGaji(Request $request)
    {
        $data = DataGaji::findDataGaji($request->id, $request->tahun, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function getTahun($nip)
    {
        $data = DataGaji::getTahun($nip);
        return response()->json(['Data'=>$data], 200);
    }

    public function getGaji($nip, $thn)
    {
        $data = DataGaji::getGaji($nip, $thn);
        return response()->json(['Data'=>$data], 200);
    }

    public function getDetailGaji($nip, $thn, $bln)
    {
        $data = DataGaji::GetViewBulanGaji($nip, $bln, $thn);
        return response()->json(['Data'=>$data], 200);
    }


    public function create(Request $request)
    {
        DataGaji::create([
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

    public function update(Request $request, DataGaji $DataGaji)
    {
        return $request;
        $DataGaji->update([
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

    public function delete(DataGaji $DataGaji)
    {
        $DataGaji->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data was successfully deleted'
        ], 200);
    }
}
