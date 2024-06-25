<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'number_of_adults', 'number_of_children', 'number_of_babies',
        'street_name', 'house_number', 'postal_code', 'city'
    ];

    public function specialRequests()
    {
        return $this->hasMany(SpecialRequest::class);
    }

    public function foodPackages()
    {
        return $this->hasMany(FoodPackage::class);
    }
}
