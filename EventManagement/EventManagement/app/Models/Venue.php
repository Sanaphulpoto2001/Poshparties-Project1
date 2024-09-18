<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    protected $fillable = ['v_image','v_name','v_location','category_id'];

    public function category()
    {
       return $this->belongsTo(Category::class);
    }
}
