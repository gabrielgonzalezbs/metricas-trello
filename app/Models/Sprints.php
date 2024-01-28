<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Sprints extends Model
{
    use HasFactory;

    use SoftDeletes;
}
