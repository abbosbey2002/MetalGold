<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    public function news()
    {
        return $this->hasMany(CategoryOfProduct::class);
    }
}
