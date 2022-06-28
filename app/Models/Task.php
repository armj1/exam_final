<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Task extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'employee_ID',        
        'description',
        'term',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function report(){
        return $this->hasOne(Report::class);
    }
}
