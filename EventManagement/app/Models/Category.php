<?php

namespace App\Models;

use App\Models\Venue;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['c_name','c_image'];
    public function venue()
    {
       return $this->hasMany(Venue::class);
    }
    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }
}
