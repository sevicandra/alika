<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHukdis extends Model
{
    use HasFactory;

    protected $table = 'data_hukdis';

    protected $fillable =[
        'bulan',
        'tahun',
        'nip',
        'no_sk',
        'tgl_sk',
        'tgl_mulai',
        'tgl_selesai',
        'uraian',
        'penerbit',
        'status',
    ];

    public $timestamps = false;

    public function scopeCountDataHukdis()
    {
        return $this    ->count();
    }

    public function scopeGetDataHukdis($data, $id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $data    ->limit($limit)
                            ->offset($offset)
                            ->get();
        } else {
            return $data    ->find($id);
        }
    }

    public function scopeFindDataHukdis($data, $keyword = null, $limit = 0, $offset = 0)
    {
        return $data    ->where('nip', 'LIKE', '%'.$keyword.'%')
                        ->take($limit)
                        ->skip($offset)
                        ->get();
    }

    public function scopeGetHukdis($data, $nip)
    {
        return $data    ->where('nip', $nip)
                        ->get();
    }
}
