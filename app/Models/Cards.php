<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;

    protected $fillable = [
        "board_id",
        "area_id",
        "status_id",
        "status_date",
        "description",
        "link",
        "start_date",
        "end_date",
        "completed",
        "intervention_level",
        "priority",
    ];

}
