<?php

// app/Models/Ipo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Ipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'gmp',
        'open_date',
        'close_date',
        'allotment_date',
        'listing_date',
    ];
    protected $table = 'ipo'; // Specify the correct table name
}
