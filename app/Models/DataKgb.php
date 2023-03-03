<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKgb extends Model
{
    use HasFactory;

    protected $table = 'data_kgb';

    protected $fillable =[
        'bulan',
        'tahun',
        'nip',
        'kdgol',
        'jabatan',
        'gapok_baru',
        'mkt_baru',
        'mkt_baru',
        'mkb_baru',
        'kdgol_baru',
        'tmt_baru',
        'no_kgb_baru',
        'tgl_kgb_baru',
        'penerbit_baru',
        'gapok_lama',
        'mkt_lama',
        'mkt_lama',
        'mkb_lama',
        'kdgol_lama',
        'tmt_lama',
        'no_kgb_lama',
        'tgl_kgb_lama',
        'penerbit_lama',
        'status',
    ];

    public $timestamps = false;

    public function scopeCountDataKgb()
    {
        return $this->  count();
    }

    public function scopeGetDataKgb($data, $id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return  $data   ->limit($limit)
                            ->offset($offset)
                            ->get();
        } else {
            return  $data   ->find($id)
                            ->get();
        }
    }

    public function scopeFindDataKgb($data, $nip = null, $limit = 0, $offset = 0)
    {
        return $data    ->where('nip', 'LIKE' ,"%".$nip."%")
                        ->limit($limit)
                        ->offset($offset)
                        ->get();
    }

    public function scopeGetKgb($data, $nip)
    {
        return $data    ->where('nip', $nip)
                        ->get();
    }
}
