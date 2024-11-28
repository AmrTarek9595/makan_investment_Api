<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class units_spec extends Model
{
    use HasFactory;
    protected $fillable=[
        "user_email",
        "unit_id",
        "amount_per_share",
        "percantage",
        "approved"


    ];
}
