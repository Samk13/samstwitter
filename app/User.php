<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Tweet;
class User extends Authenticatable
{
    use Notifiable;
    use Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'avatar', 'password','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        // return "https://avatars.dicebear.com/api/avataaars/" .auth()->user()->id. ".svg?options[]=shortHair&options[accessoriesChance]=90";
        return asset('storage/'.$value);
        // return "https://i.pravatar.cc/40?u=" . $this->email;
    }

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');
        $friends->push($this->id);

        return Tweet::whereIn('user_id', $friends)
        ->orWhere('user_id', $this->id)
        ->latest()->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)
            ->latest();

    }

    public function path($append = '')
    {
        $path = route('profile', $this->username);
        return $append ? "{$path}/{$append}": $path;
    }

}
