<?php namespace Electrica\ShopaholicBot;

use Backend;
use System\Classes\PluginBase;

/**
 * ShopaholicBot Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ShopaholicBot',
            'description' => 'No description provided yet...',
            'author'      => 'Electrica',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Electrica\ShopaholicBot\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'electrica.shopaholicbot.some_permission' => [
                'tab' => 'ShopaholicBot',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'shopaholicbot' => [
                'label'       => 'ShopaholicBot',
                'url'         => Backend::url('electrica/shopaholicbot/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['electrica.shopaholicbot.*'],
                'order'       => 500,
            ],
        ];
    }
}
