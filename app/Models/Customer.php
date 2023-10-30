<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=['name', 'birthDate', 'email', 'phone', 'address', 'city', 'state', 'zip', 'barcode', 'amount'];

    protected $casts = [
        'amount' => 'integer',
    ];
}