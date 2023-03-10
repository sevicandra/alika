<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKolaborasi extends Model
{
    use HasFactory;

    protected $table = 'data_kolaborasi';

    protected $fillable =[
        'nama',
        'url',
        'keterangan'
    ];

    public $timestamps = false;

    public function scopeCountDataKolaborasi()
    {
        return $this->count();
    }

    public function scopeGetDataKolaborasi($data, $id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $data    ->limit($limit)
                            ->offset($offset)
                            ->get();
        } else {
            return $data    ->find($id);
        }
    }

    public function scopeFindDataKolaborasi($data, $keyword = null, $limit = 0, $offset = 0)
    {
        return $data    ->where('nama', 'LIKE','%'.$keyword.'%')
                        ->limit($limit)
                        ->offset($offset)
                        ->get();
    }
}
