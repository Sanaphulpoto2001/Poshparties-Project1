<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['b_name','b_number','b_date','email','theme','guests','payment_method','special_requests','user_id', 'venue_id', 'time_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function time()
    {
        return $this->belongsTo(Time::class);
    }
}
