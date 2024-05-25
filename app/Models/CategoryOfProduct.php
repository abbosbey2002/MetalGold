<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryOfProduct extends Model
{
    use HasFactory;

    protected $table = 'category_of_products';

    protected $fillable = [
      'type_id',
      'category_id',
      'title_uz',
      'title_ru',
      'title_en',
      'short_content_uz',
      'short_content_ru',
      'short_content_en',
      'name_uz',
      'name_ru',
      'name_en',
      'photo',
    ];

    public function region()
    {
        return $this->belongsTo(Popular::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
