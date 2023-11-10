<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userpost extends Model
{
    use HasFactory;
    protected $table = 'userposts';
    protected $fillable = [
        'user_id',
        'cell_name',
        'case_name',
        'case_description'
    ];
}
