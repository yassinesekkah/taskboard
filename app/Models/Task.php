<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'deadline',
        'priority',
        'status',
    ];
    ////hta terja3 tefhamhoum 
    protected $casts = [
        'deadline' => 'date',
    ];
            //// hta hada fahmou 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
