<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $primaryKey = 'Id_pembayaran';
    public $timestamps = false;

    protected $fillable = [
        'Id_order',
        'Metode_pembayaran',
        'Tgl_pembayaran'
    ];

    public function dataOrder()
    {
        return $this->belongsTo(DataOrder::class, 'Id_order', 'Id_order');
    }
}
