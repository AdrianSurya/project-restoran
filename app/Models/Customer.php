<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'Id_customer';
    public $timestamps = false;

    protected $fillable = [
        'Nama',
        'Email',
        'Password',
        'Nomor_telepon'
    ];

    public function dataOrders()
    {
        return $this->hasMany(DataOrder::class, 'Id_customer', 'Id_customer');
    }
}
