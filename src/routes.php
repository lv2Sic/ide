<?php

Route::group([
	'namespace' => 'Lv2Sic\Ide\Controllers', 
	'prefix' => 'lv2sic/ide',
	], function() {
		Route::get('/', [
			'as' => 'ide',
			'uses' => 'IdeController@index',
		]);
	}
);
