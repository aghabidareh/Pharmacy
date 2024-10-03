<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function getSuppliersName(){
        return $this->belongsTo(Supplier::class , 'supplier_id');
    }
    public function getInvoicesName(){
        return $this->belongsTo(Invoice::class , 'invoice_id');
    }
}
