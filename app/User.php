<?php

namespace App;
use Laravel\Passport\HasApiTokens;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use EloquentFilter\Filterable;
use App\Scopes\StatusScope;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Junges\ACL\Traits\UsersTrait;

class User extends Authenticatable 
{
    use HasApiTokens,Notifiable,UsersTrait, SoftDeletes, Filterable;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'is_admin',
        'avatar',
        'password',
        'confirm_code',
        'nickname',
        'real_name',
        'weibo_name',
        'weibo_link',
        'email_notify_enabled',
        'github_id',
        'github_name',
        'github_url',
        'website',
        'description',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'confirm_code',
        'updated_at',
        'deleted_at'
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new StatusScope());
    }

    /**
     * Get the comments for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }

    /**
     * Determine whether user is a super administrator.
     *
     * @return int
     */
    public function isSuperAdmin()
    {
        return ($this->id == config('blog.super_admin')) ? 1 : 0;
    }

    /**
     * Get the avatar and return the default avatar if the avatar is null.
     *
     * @param string $value
     * @return string
     */
    public function getAvatarAttribute($value)
    {
        return isset($value) ? $value : config('blog.default_avatar');
    }
    
}
