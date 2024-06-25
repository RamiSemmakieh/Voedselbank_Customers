<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_number',
        'customer_id',
        'creation_date',
        'distribution_date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function packageItems()
    {
        return $this->hasMany(PackageItem::class);
    }
}
