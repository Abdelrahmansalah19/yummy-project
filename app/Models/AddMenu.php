<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddMenu extends Model
{
      protected $table='add_menus';
    protected $fillable =
        [
            'name',
            'salary',
            'desc',
            'img'


        ];




    use HasFactory;
}
