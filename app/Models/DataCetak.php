<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCetak extends Model
{
    use HasFactory;

    protected $table = "data_cetak";

    protected $fillable =[
        'tahun',
        'nip_asal',
        'nip_tujuan',
        'nama_tujuan',
        'jenis',
        'nomor',
        'tanggal',
        'tujuan',
        'perihal',
        'file',
        'date',
        'id_dokumen',
        'status'
    ];

    public $timestamps = false;

    public function scopeCountDataCetak($data)
    {
        return $data->count();
    }

    public function scopeGetDataCetak($data, $id = null, $limit = null, $offset = 0)
    {
        if ($id === null) {
            return $data->limit($limit)->offset($offset)->get();
        }else{
            return $data->find($id);
        }
    }

    public function scopeFindDataCetak($data, $keyword = null, $limit = null, $offset = 0)
    {
        $data->where('nip_asal', 'LIKE', '%'.$keyword.'%')->limit($limit)->offset($offset)->get();
    }

    public function scopeGetTahunAsal($data, $nip)
    {
        return $data->where('nip_asal', $nip)->select('tahun')->distinct()->get();
    }

    public function scopeGetCetakAsal($data, $nip, $tahun, $limit = null, $offset = 0)
    {
        return $data->where('nip_asal', $nip)->where('tahun', $tahun)->orderBy('tanggal', 'desc')->limit($limit)->offset($offset)->get();
    }

    public function scopeFindCetakAsal($data, $nip = null, $tahun = null, $keyword = null, $limit = null, $offset = 0)
    {
        return $data->where('nip_asal', $nip)->where('tahun', $tahun)->where('perihal', 'LIKE', '%'.$keyword.'%')->orderBy('tanggal', 'desc')->limit($limit)->offset($offset)->get();
    }

    public function scopeCountCetakAsal($data, $nip = null, $tahun = null)
    {
        return $data->where('nip_asal', $nip)->where('tahun', $tahun)->count();
    }

    public function scopeGetTahunTujuan($data, $nip)
    {
        return $data->where('status', 0)->where('nip_tujuan', $nip)->select('tahun')->distinct()->get();
    }

    public function scopeGetCetakTujuan($data, $nip, $tahun, $limit = null, $offset = 0)
    {
        return $data->where('status', 0)->where('nip_tujuan', $nip)->where('tahun', $tahun)->orderBy('tanggal', 'desc')->limit($limit)->offset($offset)->get();
    }

    public function scopeFindCetakTujuan($data, $nip = null, $tahun = null, $keyword = null, $limit = null, $offset = 0)
    {
        return $data->where('status', 0)->where('nip_tujuan', $nip)->where('tahun', $tahun)->where('perihal', 'LIKE', '%'.$keyword.'%')->orderBy('tanggal', 'desc')->limit($limit)->offset($offset)->get();
    }

    public function scopeCountCetakTujuan($data, $nip = null, $tahun = null)
    {
        return $data->where('status', 0)->where('nip_tujuan', $nip)->where('tahun', $tahun)->count();
    }

    public function scopeGetTahunRiwayat($data, $nip)
    {
        return $data->where('status', 1)->where('nip_tujuan', $nip)->select('tahun')->distinct()->get();
    }

    public function scopeGetCetakRiwayat($data, $nip, $tahun, $limit = null, $offset = 0)
    {
        return $data->where('status', 1)->where('nip_tujuan', $nip)->where('tahun', $tahun)->orderBy('tanggal', 'desc')->limit($limit)->offset($offset)->get();
    }

    public function scopeFindCetakRiwayat($data, $nip = null, $tahun = null, $keyword = null, $limit = null, $offset = 0)
    {
        return $data->where('status', 1)->where('nip_tujuan', $nip)->where('tahun', $tahun)->where('perihal', 'LIKE', '%'.$keyword.'%')->orderBy('tanggal', 'desc')->limit($limit)->offset($offset)->get();
    }

    public function scopeCountCetakRiwayat($data, $nip = null, $tahun = null)
    {
        return $data->where('status', 1)->where('nip_tujuan', $nip)->where('tahun', $tahun)->count();
    }
}
