<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'note', 'state_id', 'manager_id'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(ProjectState::class, 'state_id');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

}