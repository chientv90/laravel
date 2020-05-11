<?php

namespace App\Models;

use App\Models\Traits\UseCamelCaseAttributes;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use UseCamelCaseAttributes;
}
