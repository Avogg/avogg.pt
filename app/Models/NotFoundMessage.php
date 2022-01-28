<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotFoundMessage extends Model
{
    use HasFactory;

    protected $table = 'notfound';

    protected $fillable = [
        'message'
    ];

}
