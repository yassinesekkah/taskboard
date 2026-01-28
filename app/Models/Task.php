<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

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

    ////fhamtih chwia mais mazal mnin ndiro lcontroller nzido nchoufo 
    protected function casts(): array
    {
        return [
            'deadline' => 'date',
        ];
    }

    ///hada t9ol les relation hna belongsTo wfel user hasMany tasks
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
