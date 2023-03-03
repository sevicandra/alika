<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\DataKeluarga;
use Illuminate\Http\Request;

class DataKeluargaController extends Controller
{
    public function count()
    {
        $data=DataKeluarga::count();
        return response()->json(['Data'=>$data], 200);
    }

    public function getDataKeluarga(Request $request)
    {
        $data = DataKeluarga::getDataKeluarga($request->id, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function findDataKeluarga(Request $request)
    {
        $data = DataKeluarga::findDataKeluarga($request->keyword, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function getKeluarga(Request $request, $nip)
    {
        $data = DataKeluarga::getKeluarga($nip, $request->limit, $request->offset);
        return response()->json(['Data'=>$data], 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kdsatker'=>'min:6|max:6',
            'nip'=>'required|min:18|max:18',
            'nama'=>'required',
            'kdkeluarga'=>'required|min:1|max:1',
            'tgllhr'=>'required',
            'kddapat'=>'required|min:1|max:1',
        ]);

        $validator2 = Validator::make($request->all(), [
            'kdsatker'=>'numeric',
            'nip'=>'numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                 'status'=>false,
                 'message'=>$validator->errors()
             ], 422);
        }

        if ($validator2->fails()) {
            return response()->json([
                 'status'=>false,
                 'message'=>$validator2->errors()
             ], 422);
        }

        DataKeluarga::create([
            'kdsatker'=>$request->kdsatker,
            'nip'=>$request->nip,
            'nama'=>$request->nama,
            'kdkeluarga'=>$request->kdkeluarga,
            'tgllhr'=>$request->tgllhr,
            'kddapat'=>$request->kddapat,
        ]);
        
        return response()->json([
            'status' => true,
            'message' => 'Data was successfully added'
        ], 200);
    }

    public function update(Request $request, DataKeluarga $dataKeluarga)
    {

        $validator = Validator::make($request->all(), [
            'kdsatker'=>'min:6|max:6',
            'nip'=>'required|min:18|max:18',
            'nama'=>'required',
            'kdkeluarga'=>'required|min:1|max:1',
            'tgllhr'=>'required',
            'kddapat'=>'required|min:1|max:1',
        ]);

        $validator2 = Validator::make($request->all(), [
            'kdsatker'=>'numeric',
            'nip'=>'numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                 'status'=>false,
                 'message'=>$validator->errors()
             ], 422);
        }

        if ($validator2->fails()) {
            return response()->json([
                 'status'=>false,
                 'message'=>$validator2->errors()
             ], 422);
        }

        $dataKeluarga->update([
            'kdsatker'=>$request->kdsatker,
            'nip'=>$request->nip,
            'nama'=>$request->nama,
            'kdkeluarga'=>$request->kdkeluarga,
            'tgllhr'=>$request->tgllhr,
            'kddapat'=>$request->kddapat,
        ]);
        
        return response()->json([
            'status' => true,
            'message' => 'Data was successfully updated'
        ], 200);
    }

    public function delete(DataKeluarga $dataKeluarga)
    {
        $dataKeluarga->delete();

        return response()->json([
            'status' => true,
            'message' => 'Data was successfully deleted'
        ], 200);
    }
}
