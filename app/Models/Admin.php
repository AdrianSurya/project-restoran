<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'Id_admin';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'role'
    ];

    public function dataOrders()
    {
        return $this->hasMany(DataOrder::class, 'Id_user', 'Id_user');
    }

    
}
