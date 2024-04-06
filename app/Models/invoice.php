<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'ProductId',
        'ProductName',
        'Price',
        'Qty',
        'Tax',
      'Total',
        'Desc',
        'Net',
        'UserId',
        'UserName',
    ];
}
