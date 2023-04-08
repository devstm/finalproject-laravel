<?php

namespace App\Models;

use App\Notifications\Craftsman\Auth\ResetPassword;
use App\Notifications\Craftsman\Auth\VerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Craftsman extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    use HasApiTokens;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','phone','address',
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

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }
    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    //on Craftsman model
    //the Craftsman has many Rate
    public function Rates()
    {
        return $this->hasMany(Rate::class);
    }
    public function Posts(){
        return $this->hasMany(Post::class);
    }
    
    public function getProfileImage(){
        if (!$this->profile){
            return 'images/hasan.jpg';
        } else {
            $profile_i = $this->profile;
            $profile_id = $profile_i->id;
            $profile = Profile::findOrFail($profile_id);
            return $profile->image_path;
        }
    }
    public function crafts()
    {
        return $this->belongsToMany(Crafts::class , 'craftsman_crafts');
    }
}