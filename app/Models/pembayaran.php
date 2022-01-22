<?php

namespace App\Models;
use App\Models\User; 
use App\Models\order; 
use App\Models\transaksi; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $primaryKey = "id";

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
    
    public function order()
    {
        return $this->belongsTo('App\Models\order', 'no_order');
    }

}
