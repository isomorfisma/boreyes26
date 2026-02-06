<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'early_bird_price',
        'submission_deadline',
        'has_submission',
    ];

    protected $casts = [
        'submission_deadline' => 'datetime',
    ];
    

    public function users()
    {
        return $this->hasMany(User::class);
    }


public function getCurrentPrice()
{
    $today = Carbon::today();

    // Early Bird: 22 - 28 Februari
    if (
        $today->between(
            Carbon::create($today->year, 1, 1),
            Carbon::create($today->year, 2, 28)
        )
    ) {
        return $this->early_bird_price;
    }

    // Normal Price: 1 - 14 Maret
    if (
        $today->between(
            Carbon::create($today->year, 3, 1),
            Carbon::create($today->year, 3, 14)
        )
    ) {
        return $this->price;
    }

    // Default (di luar tanggal promo)
    return $this->price;
}

}
