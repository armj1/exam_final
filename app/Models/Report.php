<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employee_ID',        
        'task_ID',
        'file',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
