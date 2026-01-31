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
        return $query->when($search, function ($query, $search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        });
    }

    ///scope dyal filter priority
    public function scopePriority($query, $priority)
    {
        return $query->when($priority, function ($query, $priority) {
            $query->where('priority', $priority);
        });
    }

    public function scopeStatus($query, $status)
    {
        return $query->when($status, function ($query, $status) {
            $query->where('status', $status);
        });
    }

    public function scopeForUser($query, $user)
    {
        return $query->where('user_id',  $user->id);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'done');
    }

    public function scopeInProgress($query)
    {
        return $query->where('status', 'in_progress');
    }

    public function scopeOverdue($query)
    {
        return $query->where('deadline', '<', now())
                    ->whereNot('status', 'done');
    }

    public function scopeRecent($query, $limit = 5)
    {
        return $query->latest()->take($limit);
    }


}
