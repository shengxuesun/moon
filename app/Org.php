<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Org extends Model
{
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'org_ids' => 'json',
    ];

    /**
     * Members
     *
     */
    public function members()
    {
       return $this->hasManyJson('App\User', 'org_ids[]->org_id');
    }

    /**
     * Parent
     *
     */
    public function parent()
    {
        return $this->belongsTo('App\Org', 'parent_id', 'id');
    }

    /**
     * Children
     *
     */
    public function children()
    {
        return $this->hasMany('App\Org', 'parent_id', 'id');
    }
}
