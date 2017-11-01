<?php

use Modules\User\Entities\Access\Role\Role;
use Modules\User\Entities\Access\Permission\Permission;

return [
    'name'                   => 'User',
    /*
     * Users table used to store users
     */
    'users_table'            => 'users',

    /*
     * Password resets table used to store password reset emails and tokens
     */
    'password_resets_table'  => 'password_resets',

    /*
     * Social logins table used to store social platform information
     */
    'social_accounts_table'    => 'social_accounts',

    /*
     * Sessions table used to store session variables
     */
    'sessions_table'         => 'sessions',
    /*
     * Role model used by Access to create correct relations. Update the role if it is in a different namespace.
    */
    'role'                   => Role::class,

    /*
     * Roles table used by Access to save roles to the database.
     */
    'roles_table'            => 'roles',

    /*
     * Permission model used by Access to create correct relations.
     * Update the permission if it is in a different namespace.
     */
    'permission'             => Permission::class,

    /*
     * Permissions table used by Access to save permissions to the database.
     */
    'permissions_table'      => 'permissions',

    /*
     * permission_role table used by Access to save relationship between permissions and roles to the database.
     */
    'permission_role_table'  => 'permission_role',

    /*
     * role_user table used by Access to save assigned roles to the database.
     */
    'role_user_table'        => 'role_user',

    /*
     * Configurations for the user
     */
    'users'                  => [
        /*
         * Whether or not public registration is on
         */
        'registration'      => env('ENABLE_REGISTRATION', 'true'),

        /*
         * The role the user is assigned to when they sign up from the frontend, not namespaced
         */
        //'default_role'      => 'User',
        'default_role' => 3,

        /*
         * Whether or not the user has to confirm their email when signing up
         */
        'confirm_email'     => true,

        /*
         * Whether or not the users email can be changed on the edit profile screen
         */
        'change_email'      => true,

        /*
         * Whether or not new users need to be approved by an administrator before logging in
         * If this is set to true, then confirm_email is not in effect
         */
        'requires_approval' => env('REQUIRES_APPROVAL', false),

        /*
         * Session Database Driver Only
         * When active, a user can only have one session active at a time
         * That is all other sessions for that user will be deleted when they log in
         * (They can only be logged into one place at a time, all others will be logged out)
         */
        'single_login'      => true,
    ],

    /*
     * Configuration for roles
     */
    'roles'                  => [
        /*
         * Whether a role must contain a permission or can be used standalone as a label
         */
        'role_must_contain_permission' => true,
    ],

    /*
     * Socialite session variable name
     * Contains the name of the currently logged in provider in the users session
     * Makes it so social logins can not change passwords, etc.
     */
    'socialite_session_name' => 'socialite_provider',

    /*
     * Application captcha specific settings
     */
    'captcha'                => [
        /*
         * Whether the registration captcha is on or off
         */
        'registration' => env('REGISTRATION_CAPTCHA_STATUS', false),
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Sidebar Class
    |--------------------------------------------------------------------------
    | If you want to customise the admin sidebar ordering or grouping
    | You can define your own sidebar class for this module.
    | No custom sidebar: null
    */
    'custom-sidebar'         => null,
];
