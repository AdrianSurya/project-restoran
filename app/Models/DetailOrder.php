<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;

    protected $table = 'detail_order';
    protected $primaryKey = 'Id_detail';
    public $timestamps = false;

    protected $fillable = [
        'Id_order',
        'Id_menu',
        'Quantity',
        'Subtotal'
    ];

    public function dataOrder()
    {
        return $this->belongsTo(DataOrder::class, 'Id_order', 'Id_order');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'Id_menu', 'Id_menu');
    }
}
