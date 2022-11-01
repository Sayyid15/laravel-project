<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;


    protected $fillable = [
        "user_id",
        "country",
        "culture",
        "holidays",
        "language",
        "religion",
        "lifestyle",
        "clothes",
        "food"

    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cultures()
    {
        return $this->belongsToMany(Culture::class);
    }
}


