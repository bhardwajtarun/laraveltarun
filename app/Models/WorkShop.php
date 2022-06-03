<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkShop extends Model
{
    protected $table = 'workshops';
    protected $fillable = [
        'id', 'start', 'end', 'event_id'
    ];
}