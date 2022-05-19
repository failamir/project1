<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Abilities
    Route::apiResource('abilities', 'AbilitiesController', ['only' => ['index']]);

    // Locales
    Route::get('locales/languages', 'LocalesController@languages')->name('locales.languages');
    Route::get('locales/messages', 'LocalesController@messages')->name('locales.messages');

    // Permissions
    Route::resource('permissions', 'PermissionsApiController');

    // Roles
    Route::resource('roles', 'RolesApiController');

    // Users
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');
    Route::resource('users', 'UsersApiController');

    // Pangkat
    Route::resource('pangkats', 'PangkatApiController');

    // Jabatan
    Route::resource('jabatans', 'JabatanApiController');

    // Mata Pelajaran
    Route::resource('mata-pelajarans', 'MataPelajaranApiController');

    // Tugas
    Route::resource('tugas', 'TugasApiController');
});
