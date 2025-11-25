<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
        'submitted_from_page',
        'submitted_from_url',
    ];
}
