<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item_category extends Model
{
     protected $fillable = [
        'item_name',
        'item description',
        'item_image',
    ]; 
}
