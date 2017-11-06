<?php

use Modules\Menu\Entities\Menu\Menu;
use Modules\Menu\Entities\Page\Page;
use Modules\Menu\Entities\Menu\MenuItem;

return [
    'name' => 'Menu',

    /*
     * Menus table used to store menus
     */
    'menus_table' => 'menu__menus',

    /*
     * Menu Translations table used to store menu translations
     */
    'menu_translations_table' => 'menu__menu_translations',

    /*
     * Menu model used to create correct relations. Update the menu if it is in a different namespace.
     */
    'menu' => Menu::class,

    /*
     * Menu Items table used to store menu items
     */
    'menu_items_table' => 'menu__menu_items',

    /*
     * Menu Item Translations table used to store menu item translations
     */
    'menu_item_translations' => 'menu__menu_item_translations',

    /*
     * Menu Item model used to create correct relations. Update the menu item if it is in a different namespace.
     */
    'menu_item' => MenuItem::class,

    /*
     * Pages table used to store pages
     */
    'pages_table' => 'page__pages',

    /*
     * Page Translations table used to store page translations
     */
    'page_translations_table' => 'page__page_translations',

    /*
     * Menu Item model used to create correct relations. Update the menu item if it is in a different namespace.
     */
    'page' => Page::class,

    /*
    | Default Menu Presenter
    |--------------------------------------------------------------------------
    | Configure which Menu presenter will be used by default without
    | having to send it via the views
    */
    'default_menu_presenter' => null,

];
