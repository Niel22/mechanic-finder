<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Mechanic extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'shop_name',
        'username',
        'email',
        'phone_number',
        'whatsapp_number',
        'street_address',
        'town_city',
        'state',
        'country',
        'years_of_experience',
        'services_offered',
        'working_hours_from',
        'working_hours_to',
        'logo',
        'about',
        'password',
    ];

    public function review(){
        return $this->hasMany(Review::class, "mechanic_id", 'id');
    }
}
