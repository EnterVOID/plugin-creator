<?php namespace Void\Creator\Models;

use Model;

class Creator extends Model {

    protected $table = 'creators';

    public $belongsTo = [
        'user' => ['RainLab\User\Models\User'],
    ];

    // 'creation' can be of type 'Character' or 'Comic'
    public $morphTo = [
        'creation' => [],
    ];

    public $belongsToMany = [
        'roles' => ['Void\Creator\Models\Role', 'table' => 'creators_roles'],
    ];

    /**
     * @var array The attributes that are mass assignable.
     */
    protected $fillable = [
        'user',
        'creation',
        'roles',
    ];
}
