<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = "gudang";
    protected $primarykey = "id";
    protected $fillable = [
        'gudang', 
        'jenis_gudang',
        'luas',
        'volume',
        'keterangan',
    ];
    


}
