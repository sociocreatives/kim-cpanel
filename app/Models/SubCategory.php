<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'image', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
