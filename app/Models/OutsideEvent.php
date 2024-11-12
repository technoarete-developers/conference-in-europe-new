<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutsideEvent extends Model
{
    use HasFactory;

    protected $table = 'outside_event';
    public $timestamps = false;

    protected $guared = [];
}
