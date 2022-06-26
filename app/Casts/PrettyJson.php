<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class PrettyJson implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        return json_encode(json_decode($value), JSON_PRETTY_PRINT);
    }

    public function set($model, $key, $value, $attributes)
    {
        return $value;
    }
}
