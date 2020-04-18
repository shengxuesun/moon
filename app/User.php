<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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
        'org_ids' => 'json',
    ];

    public function orgs()
    {
        return $this->belongsToJson('App\Org', 'org_ids[]->org_id');
    }

    /**
     * Parent
     *
     */
    public function parent()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    /**
     * Children
     *
     */
    public function children()
    {
        return $this->hasMany('App\User', 'created_by', 'id');
    }

}
