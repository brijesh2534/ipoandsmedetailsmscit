<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Gmp extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'gmp',
    ];
    protected $table = 'gmp'; // Specify the table name
}
