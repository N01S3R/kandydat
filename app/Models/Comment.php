<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];
    protected $fillable = ['user_name', 'post_id', 'content'];
 
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function posts():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
