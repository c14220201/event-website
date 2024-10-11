<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'date',
        'start_time',
        'venue',
        'facebook_link',
        'x_link',
        'website_link',
        'active',
        'event_category_id',
        'organizer_id',
        'tags'
    ];
    public function event_category()
    {
        return $this->belongsTo(EventCategory::class);
    }
    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }
    
}
