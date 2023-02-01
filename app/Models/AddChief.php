<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddChief extends Model
{

    protected $table = 'add_chiefs';

    protected $fillable =
        [
           'name',
           'degree',
           'desc',
           'img'
        ];
    use HasFactory;
}
