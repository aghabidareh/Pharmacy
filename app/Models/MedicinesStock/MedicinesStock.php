<?php

namespace App\Models\MedicinesStock;

use App\Models\Midicines\Medicine;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinesStock extends Model
{
    use HasFactory;

    public function getMenicinesName(){
        return $this->belongsTo(Medicine::class , 'medicines_id');
    }
}
