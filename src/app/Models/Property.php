<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country_id',
        'agent_id',
        'views',
        'bedroom_count',
        'bathroom_count',
        'car_count',
        'description',
        'street_address',
        'image_url',
        'price',
        'listed_at',
    ];
}
