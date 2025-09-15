<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOrder extends Model
{
    use HasFactory;

    protected $table = 'data_order';
    protected $primaryKey = 'Id_order';
    public $timestamps = false;

    protected $fillable = [
        'Id_customer',
        'Id_admin',
        'Tgl_order',
        'Type_order',
        'Status_order',
        'Total_harga'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'Id_customer', 'Id_customer');
    }

    public function admin()
    {
        return $this->belongsTo(admin::class, 'Id_admin', 'Id_admin');
    }

    public function detailOrders()
    {
        return $this->hasMany(DetailOrder::class, 'Id_order', 'Id_order');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'Id_order', 'Id_order');
    }
}
