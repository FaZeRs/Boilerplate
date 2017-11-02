<?php

return [
    'name' => 'Dashboard',

    'history_table' => 'history',

    'history_types_table' => 'history_types',

    /*
     * BODY options for Core UI backend theme
     *
     * Header options
     * 1. '.header-fixed'					- Fixed Header
     *
     * Sidebar options
     * 1. '.sidebar-fixed'					- Fixed Sidebar
     * 2. '.sidebar-hidden'				- Hidden Sidebar
     * 3. '.sidebar-off-canvas'		- Off Canvas Sidebar
     * 4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
     * 5. '.sidebar-compact'			  - Compact Sidebar
     *
     *  Aside options
     * 1. '.aside-menu-fixed'			- Fixed Aside Menu
     * 2. '.aside-menu-hidden'			- Hidden Aside Menu
     * 3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu
     *
     * Breadcrumb options
     * 1. '.breadcrumb-fixed'			- Fixed Breadcrumb
     *
     * Footer options
     * 1. '.footer-fixed'					- Fixed footer
     */
    'theme' => [
        'body_options' => 'header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden',
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Sidebar Class
    |--------------------------------------------------------------------------
    | If you want to customise the admin sidebar ordering or grouping
    | You can define your own sidebar class for this module.
    | No custom sidebar: null
    */
    'custom-sidebar' => null,

    /*
    |--------------------------------------------------------------------------
    | Load additional view namespaces for a module
    |--------------------------------------------------------------------------
    | You can specify place from which you would like to use module views.
    | You can use any combination, but generally it's advisable to add only one,
    | extra view namespace.
    | By default every extra namespace will be set to false.
    */
    'useViewNamespaces' => [
        // Read module views from /Themes/<backend-theme-name>/views/modules/<module-name>
        'backend-theme' => false,
        // Read module views from /Themes/<frontend-theme-name>/views/modules/<module-name>
        'frontend-theme' => false,
        // Read module views from /resources/views/boilerplate/<module-name>
        'resources' => false,
    ],
];
