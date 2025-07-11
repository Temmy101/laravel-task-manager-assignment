<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'is_completed',
        'scheduled_date',
        'start_time',
        'reminder_time',
    ];

    public function isCompleted()
    {
        return $this->is_completed;
    }

    public function markAsCompleted()
    {
        $this->is_completed = true;
        $this->save();
    }
}
