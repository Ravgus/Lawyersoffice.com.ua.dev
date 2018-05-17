<?php

/*Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Dashboard');
}]);*/

Route::get('/', ['as' => 'admin.dashboard', 'uses' => '\App\Http\Controllers\DashboardController@index']);
