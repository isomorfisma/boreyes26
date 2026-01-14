<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
