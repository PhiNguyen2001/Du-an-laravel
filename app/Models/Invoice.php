<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'number',
        'address',
        'total_price',
        'status',
    ];

    public function invoiceDetails(){
        return $this->hasMany(InvoiceDetail::class, 'invoice_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getTotalPriceAttribute($value){
        $newValue = $this->attributes['total_price'] . " VNĐ";

        return $newValue;
    }
}
