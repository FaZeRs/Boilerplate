<?php

return [
    'name' => 'Dashboard',

    'history_table' => 'history',

    'history_types_table' => 'history_types',
    /*
     * Skin for Admin LTE backend theme
     *
     * Available options:
     *
     * black
     * black-light
     * blue
     * blue-light
     * green
     * green-light
     * purple
     * purple-light
     * red
     * red-light
     * yellow
     * yellow-light
     */
    'theme'               => 'blue',

    /*
     * Layout for the Admin LTE backend theme
     *
     * Fixed:               use the class .fixed to get a fixed header and sidebar.
     *                      This makes scrolling affect the content only and put the sidebar and header in a fixed position.
     *
     * Collapsed Sidebar:   use the class .sidebar-collapse to have a collapsed sidebar upon loading.
     *                      Use this if you want the sidebar to be hidden by default.
     *
     * Boxed Layout:        use the class .layout-boxed to get a boxed layout that stretches only to 1250px.
     *                      Provides spaces on both sides of the screen, if the screen is big enough.
     *
     * Top Navigation:      use the class .layout-top-nav to remove the sidebar and have your links at the top navbar.
     *                      Makes the sidebar hover the content when expanded.
     *
     * Sidebar Mini:        Shows the only the icons of the sidebar items when collapsed. Sidebar will not fully collapse.
     *
     * Available options:
     *
     * fixed
     * sidebar-collapse
     * layout-boxed
     * layout-top-nav
     * sidebar-mini
     *
     * Note: you cannot use both layout-boxed and fixed at the same time. Anything else can be mixed together.
     */
    'layout'              => 'sidebar-mini',
    /*
    |--------------------------------------------------------------------------
    | Custom Sidebar Class
    |--------------------------------------------------------------------------
    | If you want to customise the admin sidebar ordering or grouping
    | You can define your own sidebar class for this module.
    | No custom sidebar: null
    */
    'custom-sidebar'      => null,

    /*
    |--------------------------------------------------------------------------
    | Load additional view namespaces for a module
    |--------------------------------------------------------------------------
    | You can specify place from which you would like to use module views.
    | You can use any combination, but generally it's advisable to add only one,
    | extra view namespace.
    | By default every extra namespace will be set to false.
    */
    'useViewNamespaces'   => [
        // Read module views from /Themes/<backend-theme-name>/views/modules/<module-name>
        'backend-theme'  => false,
        // Read module views from /Themes/<frontend-theme-name>/views/modules/<module-name>
        'frontend-theme' => false,
        // Read module views from /resources/views/boilerplate/<module-name>
        'resources'      => false,
    ],
];
