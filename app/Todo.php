<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Todo extends Model
{
    /**
     * Fillable attributes
     * @var array
     */
    protected $fillable = ['title', 'isDone'];

    /**
     * Returns user relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
