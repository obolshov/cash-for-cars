<?php

declare(strict_types=1);

namespace App\Models;

use App\Casts\PrettyJson;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    protected $casts = [
        'content' => PrettyJson::class
    ];
}
