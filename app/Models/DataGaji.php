<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGaji extends Model
{
    use HasFactory;

    protected $table = "data_gaji";

    protected $fillable =[
        'kdjns',
        'kdsatker',
        'kdanak',
        'kdsubanak',
        'kdkawin',
        'kdgapok',
        'kdjab',
        'bulan',
        'tahun',
        'nip',
        'gapok',
        'tistri',
        'tanak',
        'tumum',
        'ttambumum',
        'tstruktur',
        'tfungsi',
        'bulat',
        'tberas',
        'tpajak',
        'pberas',
        'tpapua',
        'tpencil',
        'tlain',
        'iwp',
        'pph',
        'sewarmh',
        'tunggakan',
        'utanglebih',
        'potlain',
        'taperum',
        'bpjs',
    ];

    public $timestamps = false;

    public function scopeCountDataGaji($data)
    {
        return $data->count();
    }

    public function scopeGetDataGaji($data, $id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $data->limit($limit)->offset($offset)->get();
        } else {
            return $data->where('id', $id)->get();
        }
    }

    public function scopeFindDataGaji($data, $nip = null, $tahun = null, $limit = 0, $offset = 0)
    {
        return $data    ->where('nip', $nip)
                        ->where('tahun', $tahun)
                        ->orderBy('bulan', 'ASC')->limit($limit)
                        ->offset($offset)
                        ->get();
    }

    public function scopeGetTahun($data, $nip)
    {
        return $data    ->where('nip', $nip)
                        ->orderBy('tahun', 'DESC')
                        ->select('tahun')
                        ->distinct()
                        ->get();
    }

    public function scopeGetGaji($data, $nip, $thn)
    {
        return  $data   ->select('data_gaji.*', 'ref_bulan.bulan as nama_bulan')
                        ->leftJoin('ref_bulan', 'data_gaji.bulan', '=', 'ref_bulan.kode')
                        ->where('data_gaji.nip', '=', $nip)
                        ->where('data_gaji.tahun', '=', $thn)
                        ->get();
    }

    public function scopeGetBulanGaji($data, $nip, $bln, $thn)
    {
        return $data->where('nip', $nip)->where('bulan', $bln)->where('tahun', $thn)->get();
    }

    public function scopeGetViewBulanGaji($data, $nip, $bln, $thn)
    {
        return $data->where('nip', $nip)->where('tahun', $thn)->where('bulan', $bln)->get();
    }
}
