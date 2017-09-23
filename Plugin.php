<?php namespace Zhang1career\Workflow;

use Backend;
use System\Classes\PluginBase;

/**
 * workflow Plugin Information File
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
            'name'        => 'workflow',
            'description' => 'No description provided yet...',
            'author'      => 'zhang1career',
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
            'Zhang1career\Workflow\Components\MyComponent' => 'myComponent',
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
            'zhang1career.workflow.some_permission' => [
                'tab' => 'workflow',
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
            'workflow' => [
                'label'       => 'workflow',
                'url'         => Backend::url('zhang1career/workflow/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['zhang1career.workflow.*'],
                'order'       => 500,
            ],
        ];
    }
}
