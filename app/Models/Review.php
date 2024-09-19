<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mechanic_id',
        'reviews',
        'rating',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function mechanic(){
        return $this->belongsTo(Mechanic::class, 'mechanic_id');
    }
}
