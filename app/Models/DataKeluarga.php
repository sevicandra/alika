<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKeluarga extends Model
{
    use HasFactory;

    protected $table = 'data_keluarga';
    
    protected $fillable =[
        'kdsatker',
        'nip',
        'nama',
        'kdkeluarga',
        'tgllhr',
        'kddapat',
    ];

    public $timestamps = false;

    public function scopeCountDataKeluarga()
    {
        return $this->  count();
    }

    public function scopeGetDataKeluarga($data, $id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $data    ->limit($limit)
                            ->offset($offset)
                            ->get();
        } else {
            return $data    ->find($id);
        }
    }

    public function scopeFindDataKeluarga($data, $keyword = null, $limit = 0, $offset = 0)
    {
        return $data    ->where('nama', 'LIKE', "%".$keyword."%")
                        ->orWhere('nip', 'LIKE', "%".$keyword."%")
                        ->limit($limit)
                        ->offset($offset)
                        ->get();
    }

    public function scopeGetKeluarga($data, $nip, $limit = 0, $offset = 0)
    {
        return $data    ->where('nip', $nip)
                        ->limit($limit)
                        ->offset($offset)
                        ->orderby('tgllhr', 'ASC')
                        ->get();
    }

}
