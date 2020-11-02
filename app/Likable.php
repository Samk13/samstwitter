<?php

use App\User;
namespace App;

use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function scopeWithLikes(Builder $query)
    {

        $query->leftJoinSub(
            'SELECT tweet_id, SUM(liked) likes, SUM(!liked) deslikes FROM likes
            group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );

    }

    public function isLikedBy(User $user)
    {
        return (bool) $this->likes->where('user_id', $this->id)->where('liked', true)->count();
    }

    public function isDisLikedBy(User $user)
    {
        return (bool) $this->likes->where('user_id', $this->id)->where('liked', false)->count();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}
