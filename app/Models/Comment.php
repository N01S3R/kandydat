<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id', 'post_id', 'parent_id', 'body'];
    /**
     * Relation one to one User
     *
     * @return string
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Relation one to many Reply
     *
     * @return string
    */
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
