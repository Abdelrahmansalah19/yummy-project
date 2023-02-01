<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddGallary extends Model
{
    protected $table = 'add_gallaries';
    protected $fillable =
        [
              'img'
        ];
    use HasFactory;
}
