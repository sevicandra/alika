<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKurang extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'data_kurang';

    protected $fillable =[
        'kdjns',
        'kdsatker',
        'kdanak',
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

    public function scopeCountDataKurang()
    {
        return $this->count();
    }

    public function scopeGetDataKurang($data, $id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return  $data   ->limit($limit)
                            ->offset($offset)
                            ->get();
        } else {
            return  $data   ->find($id);
        }
    }

    public function scopeFindDataKurang($data, $nip = null, $tahun = null, $limit = 0, $offset = 0)
    {
        return  $data   ->where('nip', $nip)
                        ->where('tahun', $tahun)
                        ->orderBy('bulan', 'ASC')
                        ->limit($limit)
                        ->offset($offset)
                        ->get();
    }

    public function scopeGetTahun($data, $nip)
    {
        return  $data   ->where('nip', $nip)
                        ->orderBy('tahun', 'DESC')
                        ->select('tahun')
                        ->distinct()
                        ->get();
    }

    public function scopeGetKurang($data, $nip, $thn)
    {
        return  $data   ->select('data_kurang.*', 'ref_bulan.bulan as nama_bulan')
                        ->leftJoin('ref_bulan', 'data_kurang.bulan', '=', 'ref_bulan.kode')
                        ->where('data_kurang.nip', '=', $nip)
                        ->where('data_kurang.tahun', '=', $thn)
                        ->get();
    }

    public function scopeGetBulan($data, $nip, $thn)
    {
        return  $data   ->where('nip', $nip)
                        ->where('tahun', $thn)
                        ->orderBy('bulan', 'ASC')
                        ->select('bulan')
                        ->distinct()
                        ->get();
    }
}
