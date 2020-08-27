<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Role;
use App\Idea;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'fname','lname', 'email', 'avatar', 'password','gender', 'birth_date'
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


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRoles($roles)
    {
        if($this->roles()->whereIn('name', $roles)->first()) {
            return true;
        }
        return false;
    }

    public function hasRole($role)
    {
        if($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public function scopeHasRole($query, $role)
    {
        $query->where('role', '=', $role);
    }

    public function ideas()
    {
      return $this->hasMany(Idea::class)->latest();
    }

    public function timeline(){
      //return Idea::latest()->where('user_id', $this->id)->get();
      // Include all of the user's tweets
      // as well as the tweets of
      // everyone they follow.. in descending order by date.

       // $friends = $this->follows->pluck('id');
      //$ids->push($this->id);

       // return Idea::whereIn('user_id', $friends)
       //           ->orWhere('user_id', $this->id)
       //           ->latest()->get();
      // Displays the ideas for all the users
       return Idea::latest()->get();
    }

    public function profile($append = '')
    {
      $path = route('profile', $this->username);
      return $append ? "{$path}/{$append}" : $path;
    }

    
}
