<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
      'name_uz',
      'name_ru',
      'name_en',
      'size',
      'theory',
      'manufacturer',
      'unit',
      'price',
      'photo',
    ];


    public function product()
    {
        return $this->HasMany(CategoryOfProduct::class);
    }
}
