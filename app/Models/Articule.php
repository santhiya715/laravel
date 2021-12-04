<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articule extends Model
{
    use HasFactory;
     protected $fillable = [
        'fname', 'lname','address','contact','pancardno','adharcardno','reference'
    ];

}
