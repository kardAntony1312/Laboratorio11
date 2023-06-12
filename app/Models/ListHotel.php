<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListHotel extends Model
{   
    protected $table = 'list_hotels';   //mas protegido XD
    use HasFactory;

    public function ListPromocion()
    {
        return $this->hasMany(ListPromocion::class);
    }

    public function scopeListaASC($query){
        return $query->orderBy('Ititle','ASC');
        }

    public function scopeListaDESC($query){
        return $query->orderBy('Ititle','DESC');
        }

}
