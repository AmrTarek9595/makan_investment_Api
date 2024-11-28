<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unite extends Model
{
    use HasFactory;
    protected $fillable=[
            "title",
            "price",
            "min_amount",
            "number_of_bathroom",
            "number_of_bedroom",
            "number_of_kitchen",
            "area",
            "location",
            "description",
            "status",
            "taken_percantage",
            "images",
            "sold_out",
            "sold_date",
            "roi",
            "purchase_date"

    ];
}
