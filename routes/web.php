<?php

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
	includeRouteFiles(__DIR__.'/Frontend/');
});

