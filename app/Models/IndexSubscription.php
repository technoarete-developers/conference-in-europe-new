<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexSubscription extends Model
{
    use HasFactory;

    protected $table = 'index_subscription';
	public $timestamps = false;
    protected $fillable = [
        'subscribe_id',
        'name',
        'email',
        'mobile_no',
        'country',
        'status',
        'index_id',
        'topic',
        'preferable_month',
        'category',
        'source',
        'date',
        'comments'
    ];
}
