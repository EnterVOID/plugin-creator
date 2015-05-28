<?php namespace Void\Creator;

use App;
use Event;
use Backend;
use System\Classes\PluginBase;
use Illuminate\Foundation\AliasLoader;
use Void\Creator\Models\MailBlocker;

class Plugin extends PluginBase
{
    /**
     * @var boolean Determine if this plugin should have elevated privileges.
     */
    public $elevated = true;

    public function pluginDetails()
    {
        return [
            'name'        => 'void.creator::lang.plugin.name',
            'description' => 'void.creator::lang.plugin.description',
            'author'      => 'Jordan Bobo',
            'icon'        => 'icon-paint-brush',
        ];
    }

    public function registerComponents()
    {
        return [
            'Void\Creator\Components\Session'       => 'session',
            'Void\Creator\Components\Account'       => 'account',
            'Void\Creator\Components\ResetPassword' => 'resetPassword'
        ];
    }

    public function registerPermissions()
    {
        return [
            'void.creators.access_creators'  => ['tab' => 'Creators', 'label' => 'Manage Creators'],
            'void.roles.access_role'  => ['tab' => 'Roles', 'label' => 'Manage Roles'],
        ];
    }

    public function registerNavigation()
    {
        return [
            'creator' => [
                'label'       => 'void.creator::lang.creators.menu_label',
                'url'         => Backend::url('void/creator/creators'),
                'icon'        => 'icon-paint-brush',
                'permissions' => ['void.creators.*'],
                'order'       => 500,

                'sideMenu' => [
                    'creators' => [
                        'label'       => 'void.creator::lang.creators.all_creators',
                        'icon'        => 'icon-paint-brush',
                        'url'         => Backend::url('void/creator/creators'),
                        'permissions' => ['void.creators.access_creators'],
                    ],
                    'roles' => [
                        'label'       => 'void.creator::lang.roles.all_roles',
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('void/creator/roles'),
                        'permissions' => ['void.roles.access_roles'],
                    ],
                ],
            ],
        ];
    }

    // public function registerSettings()
    // {
    //     return [
    //         'settings' => [
    //             'label'       => 'void.creator::lang.settings.menu_label',
    //             'description' => 'void.creator::lang.settings.menu_description',
    //             'category'    => 'void.creator::lang.settings.creators',
    //             'icon'        => 'icon-cog',
    //             'class'       => 'Void\Creator\Models\Settings',
    //             'order'       => 500,
    //             'permissions' => ['void.creators.*'],
    //         ],
    //     ];
    // }
}
