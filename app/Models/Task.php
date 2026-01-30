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

    ///scope dyal search
    public function scopeSearch($query, $search)
    {
        return $query->when($search, function($query, $search){
                    $query->where(function ($q) use ($search){
                        $q->where('title', 'like', "%{$search}%")
                          ->orWhere('description', 'like', "%{$search}%");
                    });
                });
    }
}
