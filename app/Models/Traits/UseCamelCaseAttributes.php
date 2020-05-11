<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait UseCamelCaseAttributes
{
    // Allow for camelCased attribute access
    public function getAttribute($key)
    {
        return parent::getAttribute(Str::snake($key));
    }

    public function setAttribute($key, $value)
    {
        return parent::setAttribute(Str::snake($key), $value);
    }
}
