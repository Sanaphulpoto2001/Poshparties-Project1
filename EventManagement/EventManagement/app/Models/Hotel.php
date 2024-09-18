<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['h_image','h_name','h_location','category_id']; 
    public function category()
    {
       return $this->belongsTo(Category::class);
    }
}
