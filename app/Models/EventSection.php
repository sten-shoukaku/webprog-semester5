<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSection extends Model
{
    protected $table = 'event_sections';
    public $timestamps = false;
    use HasFactory;
}
