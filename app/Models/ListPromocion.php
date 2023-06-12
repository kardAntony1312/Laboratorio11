<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPromocion extends Model
{
    protected $table = 'list_promocions';   // más protegido XD
    use HasFactory;

    public function ListHotel()
    {
        return $this->belongsTo(ListHotel::class);
    }

    public function scopeListaESP($query, $codigo){
        return $query->where('id_hotel',$codigo);
        }
}
