<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $primaryKey = 'Id_menu';
    public $timestamps = false;

    protected $fillable = [
        'Nama_menu',
        'Harga',
        'gambar'
    ];

    public function detailOrders()
    {
        return $this->hasMany(DetailOrder::class, 'Id_menu', 'Id_menu');
    }
}
