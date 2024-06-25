<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'request_type',
        'request_details',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function allergies()
    {
        return $this->belongsToMany(Allergy::class, 'request_allergies');
    }
}
