<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class MarketNews extends Model
{

    use HasFactory;

    protected $fillable = [
        'date',
        'market_news',
    ];
    // Cast the date attribute to a Carbon instance
    protected $casts = [
        'date' => 'date',
    ];
    protected $table = 'marketnews'; // Specify the table name
}
