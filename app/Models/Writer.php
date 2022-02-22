<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;
    protected $with = ['books'];

    public function books() {
        return $this->hasMany(\App\Models\Book::class);
    }
}
