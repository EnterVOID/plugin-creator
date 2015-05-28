<?php namespace Void\Creator\Models;

use Model;

class Role extends Model {

    protected $table = 'creator_roles';

    public $belongsToMany = [
        'creators' => ['Void\Creator\Models\Creator', 'table' => 'creators_roles'],
    ];

    /**
     * @var array The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
    ];
}
