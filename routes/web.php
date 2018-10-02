<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {


	// Authentication Routes
	Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

	// Registration Routes
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	// Password Reset Routes
	Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'Auth\PasswordController@reset');

	// Categories
	Route::resource('categories', 'CategoryController', ['except' => ['create']]);
	Route::resource('tags', 'TagController', ['except' => ['create']]);

	// Comments
	Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);


	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
    Route::get('contact', 'PagesController@getContact');
    Route::post('contact', 'PagesController@postContact');
    Route::get('about', 'PagesController@getAbout');
    Route::get('navigation', 'PagesController@getnavigation')->name('navigation');


	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');
	Route::resource('jeephy01tt01','jeephy01tt01Controller');

    Route::resource('jeephy01tt02', 'jeephy01tt02Controller');
    Route::resource('jeephy01tt03', 'jeephy01tt03Controller');
    Route::resource('jeephy02tt01', 'jeephy02tt01Controller');
    Route::resource('jeephy02tt02', 'jeephy02tt02Controller');
    Route::resource('jeephy02tt03', 'jeephy02tt03Controller');
    Route::resource('jeephy03tt01', 'jeephy03tt01Controller');
    Route::resource('jeephy03tt02', 'jeephy03tt02Controller');
    Route::resource('jeephy03tt03', 'jeephy03tt03Controller');
    Route::resource('jeephy04tt01', 'jeephy04tt01Controller');
    Route::resource('jeephy04tt02', 'jeephy04tt02Controller');
    Route::resource('jeephy04tt03', 'jeephy04tt03Controller');
    Route::resource('jeephy05tt01', 'jeephy05tt01Controller');
    Route::resource('jeephy05tt02', 'jeephy05tt02Controller');
    Route::resource('jeephy05tt03', 'jeephy05tt03Controller');
    Route::resource('jeephy06tt01', 'jeephy06tt01Controller');
    Route::resource('jeephy06tt02', 'jeephy06tt02Controller');
    Route::resource('jeephy06tt03', 'jeephy06tt03Controller');
    Route::resource('jeephy07tt01', 'jeephy07tt01Controller');
    Route::resource('jeephy07tt02', 'jeephy07tt02Controller');
    Route::resource('jeephy07tt03', 'jeephy07tt03Controller');
    Route::resource('jeephy08tt01', 'jeephy08tt01Controller');
    Route::resource('jeephy08tt02', 'jeephy08tt02Controller');
    Route::resource('jeephy08tt03', 'jeephy08tt03Controller');
    Route::resource('jeephy09tt01', 'jeephy09tt01Controller');
    Route::resource('jeephy09tt02', 'jeephy09tt02Controller');
    Route::resource('jeephy09tt03', 'jeephy09tt03Controller');
    Route::resource('jeephy10tt01', 'jeephy10tt01Controller');
    Route::resource('jeephy10tt02', 'jeephy10tt02Controller');
    Route::resource('jeephy10tt03', 'jeephy10tt03Controller');
    Route::resource('jeephy11tt01', 'jeephy11tt01Controller');
    Route::resource('jeephy11tt02', 'jeephy11tt02Controller');
    Route::resource('jeephy11tt03', 'jeephy11tt03Controller');
    Route::resource('jeephy12tt01', 'jeephy12tt01Controller');
    Route::resource('jeephy12tt02', 'jeephy12tt02Controller');
    Route::resource('jeephy12tt03', 'jeephy12tt03Controller');
    Route::resource('jeephy13tt01', 'jeephy13tt01Controller');
    Route::resource('jeephy13tt02', 'jeephy13tt02Controller');
    Route::resource('jeephy13tt03', 'jeephy13tt03Controller');
    Route::resource('jeephy14tt01', 'jeephy14tt01Controller');
    Route::resource('jeephy14tt02', 'jeephy14tt02Controller');
    Route::resource('jeephy14tt03', 'jeephy14tt03Controller');
    Route::resource('jeephy15tt01', 'jeephy15tt01Controller');
    Route::resource('jeephy15tt02', 'jeephy15tt02Controller');
    Route::resource('jeephy15tt03', 'jeephy15tt03Controller');
    Route::resource('jeephy16tt01', 'jeephy16tt01Controller');
    Route::resource('jeephy16tt02', 'jeephy16tt02Controller');
    Route::resource('jeephy16tt03', 'jeephy16tt03Controller');
    Route::resource('jeephy17tt01', 'jeephy17tt01Controller');
    Route::resource('jeephy17tt02', 'jeephy17tt02Controller');
    Route::resource('jeephy17tt03', 'jeephy17tt03Controller');
    Route::resource('jeephy18tt01', 'jeephy18tt01Controller');
    Route::resource('jeephy18tt02', 'jeephy18tt02Controller');
    Route::resource('jeephy18tt03', 'jeephy18tt03Controller');
    Route::resource('jeephy19tt01', 'jeephy19tt01Controller');
    Route::resource('jeephy19tt02', 'jeephy19tt02Controller');
    Route::resource('jeephy19tt03', 'jeephy19tt03Controller');
    Route::resource('jeephy20tt01', 'jeephy20tt01Controller');
    Route::resource('jeephy20tt02', 'jeephy20tt02Controller');
    Route::resource('jeephy20tt03', 'jeephy20tt03Controller');








    Route::resource('jeechem01tt01', 'jeechem01tt01Controller');
    Route::resource('jeechem01tt02', 'jeechem01tt02Controller');
    Route::resource('jeechem01tt03', 'jeechem01tt03Controller');
    Route::resource('jeechem02tt01', 'jeechem02tt01Controller');
    Route::resource('jeechem02tt02', 'jeechem02tt02Controller');
    Route::resource('jeechem02tt03', 'jeechem02tt03Controller');
    Route::resource('jeechem03tt01', 'jeechem03tt01Controller');
    Route::resource('jeechem03tt02', 'jeechem03tt02Controller');
    Route::resource('jeechem03tt03', 'jeechem03tt03Controller');
    Route::resource('jeechem04tt01', 'jeechem04tt01Controller');
    Route::resource('jeechem04tt02', 'jeechem04tt02Controller');
    Route::resource('jeechem04tt03', 'jeechem04tt03Controller');
    Route::resource('jeechem05tt01', 'jeechem05tt01Controller');
    Route::resource('jeechem05tt02', 'jeechem05tt02Controller');
    Route::resource('jeechem05tt03', 'jeechem05tt03Controller');
    Route::resource('jeechem06tt01', 'jeechem06tt01Controller');
    Route::resource('jeechem06tt02', 'jeechem06tt02Controller');
    Route::resource('jeechem06tt03', 'jeechem06tt03Controller');
    Route::resource('jeechem07tt01', 'jeechem07tt01Controller');
    Route::resource('jeechem07tt02', 'jeechem07tt02Controller');
    Route::resource('jeechem07tt03', 'jeechem07tt03Controller');
    Route::resource('jeechem08tt01', 'jeechem08tt01Controller');
    Route::resource('jeechem08tt02', 'jeechem08tt02Controller');
    Route::resource('jeechem08tt03', 'jeechem08tt03Controller');
    Route::resource('jeechem09tt01', 'jeechem09tt01Controller');
    Route::resource('jeechem09tt02', 'jeechem09tt02Controller');
    Route::resource('jeechem09tt03', 'jeechem09tt03Controller');
    Route::resource('jeechem10tt01', 'jeechem10tt01Controller');
    Route::resource('jeechem10tt02', 'jeechem10tt02Controller');
    Route::resource('jeechem10tt03', 'jeechem10tt03Controller');
    Route::resource('jeechem11tt01', 'jeechem11tt01Controller');
    Route::resource('jeechem11tt02', 'jeechem11tt02Controller');
    Route::resource('jeechem11tt03', 'jeechem11tt03Controller');
    Route::resource('jeechem12tt01', 'jeechem12tt01Controller');
    Route::resource('jeechem12tt02', 'jeechem12tt02Controller');
    Route::resource('jeechem12tt03', 'jeechem12tt03Controller');
    Route::resource('jeechem13tt01', 'jeechem13tt01Controller');
    Route::resource('jeechem13tt02', 'jeechem13tt02Controller');
    Route::resource('jeechem13tt03', 'jeechem13tt03Controller');
    Route::resource('jeechem14tt01', 'jeechem14tt01Controller');
    Route::resource('jeechem14tt02', 'jeechem14tt02Controller');
    Route::resource('jeechem14tt03', 'jeechem14tt03Controller');
    Route::resource('jeechem15tt01', 'jeechem15tt01Controller');
    Route::resource('jeechem15tt02', 'jeechem15tt02Controller');
    Route::resource('jeechem15tt03', 'jeechem15tt03Controller');
    Route::resource('jeechem16tt01', 'jeechem16tt01Controller');
    Route::resource('jeechem16tt02', 'jeechem16tt02Controller');
    Route::resource('jeechem16tt03', 'jeechem16tt03Controller');
    Route::resource('jeechem17tt01', 'jeechem17tt01Controller');
    Route::resource('jeechem17tt02', 'jeechem17tt02Controller');
    Route::resource('jeechem17tt03', 'jeechem17tt03Controller');
    Route::resource('jeechem18tt01', 'jeechem18tt01Controller');
    Route::resource('jeechem18tt02', 'jeechem18tt02Controller');
    Route::resource('jeechem18tt03', 'jeechem18tt03Controller');
    Route::resource('jeechem19tt01', 'jeechem19tt01Controller');
    Route::resource('jeechem19tt02', 'jeechem19tt02Controller');
    Route::resource('jeechem19tt03', 'jeechem19tt03Controller');
    Route::resource('jeechem20tt01', 'jeechem20tt01Controller');
    Route::resource('jeechem20tt02', 'jeechem20tt02Controller');
    Route::resource('jeechem20tt03', 'jeechem20tt03Controller');
    Route::resource('jeechem21tt01', 'jeechem21tt01Controller');
    Route::resource('jeechem21tt02', 'jeechem21tt02Controller');
    Route::resource('jeechem21tt03', 'jeechem21tt03Controller');
    Route::resource('jeechem22tt01', 'jeechem22tt01Controller');
    Route::resource('jeechem22tt02', 'jeechem22tt02Controller');
    Route::resource('jeechem22tt03', 'jeechem22tt03Controller');
    Route::resource('jeechem23tt01', 'jeechem23tt01Controller');
    Route::resource('jeechem23tt02', 'jeechem23tt02Controller');
    Route::resource('jeechem23tt03', 'jeechem23tt03Controller');
    Route::resource('jeechem24tt01', 'jeechem24tt01Controller');
    Route::resource('jeechem24tt02', 'jeechem24tt02Controller');
    Route::resource('jeechem24tt03', 'jeechem24tt03Controller');
    Route::resource('jeechem25tt01', 'jeechem25tt01Controller');
    Route::resource('jeechem25tt02', 'jeechem25tt02Controller');
    Route::resource('jeechem25tt03', 'jeechem25tt03Controller');
    Route::resource('jeechem26tt01', 'jeechem26tt01Controller');
    Route::resource('jeechem26tt02', 'jeechem26tt02Controller');
    Route::resource('jeechem26tt03', 'jeechem26tt03Controller');
    Route::resource('jeechem27tt01', 'jeechem27tt01Controller');
    Route::resource('jeechem27tt02', 'jeechem27tt02Controller');
    Route::resource('jeechem27tt03', 'jeechem27tt03Controller');
    Route::resource('jeechem28tt01', 'jeechem28tt01Controller');
    Route::resource('jeechem28tt02', 'jeechem28tt02Controller');
    Route::resource('jeechem28tt03', 'jeechem28tt03Controller');








    Route::resource('jeemat01tt01', 'jeemat01tt01Controller');
    Route::resource('jeemat01tt02', 'jeemat01tt02Controller');
    Route::resource('jeemat01tt03', 'jeemat01tt03Controller');
    Route::resource('jeemat02tt01', 'jeemat02tt01Controller');
    Route::resource('jeemat02tt02', 'jeemat02tt02Controller');
    Route::resource('jeemat02tt03', 'jeemat02tt03Controller');
    Route::resource('jeemat03tt01', 'jeemat03tt01Controller');
    Route::resource('jeemat03tt02', 'jeemat03tt02Controller');
    Route::resource('jeemat03tt03', 'jeemat03tt03Controller');
    Route::resource('jeemat04tt01', 'jeemat04tt01Controller');
    Route::resource('jeemat04tt02', 'jeemat04tt02Controller');
    Route::resource('jeemat04tt03', 'jeemat04tt03Controller');
    Route::resource('jeemat05tt01', 'jeemat05tt01Controller');
    Route::resource('jeemat05tt02', 'jeemat05tt02Controller');
    Route::resource('jeemat05tt03', 'jeemat05tt03Controller');
    Route::resource('jeemat06tt01', 'jeemat06tt01Controller');
    Route::resource('jeemat06tt02', 'jeemat06tt02Controller');
    Route::resource('jeemat06tt03', 'jeemat06tt03Controller');
    Route::resource('jeemat07tt01', 'jeemat07tt01Controller');
    Route::resource('jeemat07tt02', 'jeemat07tt02Controller');
    Route::resource('jeemat07tt03', 'jeemat07tt03Controller');
    Route::resource('jeemat08tt01', 'jeemat08tt01Controller');
    Route::resource('jeemat08tt02', 'jeemat08tt02Controller');
    Route::resource('jeemat08tt03', 'jeemat08tt03Controller');
    Route::resource('jeemat09tt01', 'jeemat09tt01Controller');
    Route::resource('jeemat09tt02', 'jeemat09tt02Controller');
    Route::resource('jeemat09tt03', 'jeemat09tt03Controller');
    Route::resource('jeemat10tt01', 'jeemat10tt01Controller');
    Route::resource('jeemat10tt02', 'jeemat10tt02Controller');
    Route::resource('jeemat10tt03', 'jeemat10tt03Controller');
    Route::resource('jeemat11tt01', 'jeemat11tt01Controller');
    Route::resource('jeemat11tt02', 'jeemat11tt02Controller');
    Route::resource('jeemat11tt03', 'jeemat11tt03Controller');
    Route::resource('jeemat12tt01', 'jeemat12tt01Controller');
    Route::resource('jeemat12tt02', 'jeemat12tt02Controller');
    Route::resource('jeemat12tt03', 'jeemat12tt03Controller');
    Route::resource('jeemat13tt01', 'jeemat13tt01Controller');
    Route::resource('jeemat13tt02', 'jeemat13tt02Controller');
    Route::resource('jeemat13tt03', 'jeemat13tt03Controller');
    Route::resource('jeemat14tt01', 'jeemat14tt01Controller');
    Route::resource('jeemat14tt02', 'jeemat14tt02Controller');
    Route::resource('jeemat14tt03', 'jeemat14tt03Controller');
    Route::resource('jeemat15tt01', 'jeemat15tt01Controller');
    Route::resource('jeemat15tt02', 'jeemat15tt02Controller');
    Route::resource('jeemat15tt03', 'jeemat15tt03Controller');
    Route::resource('jeemat16tt01', 'jeemat16tt01Controller');
    Route::resource('jeemat16tt02', 'jeemat16tt02Controller');
    Route::resource('jeemat16tt03', 'jeemat16tt03Controller');





    Route::resource('jee18ft01', 'jee18ft01Controller');
    Route::resource('jee18ft02', 'jee18ft02Controller');
    Route::resource('jee18ft03', 'jee18ft03Controller');
    Route::resource('jee18ft04', 'jee18ft04Controller');
    Route::resource('jee18ft05', 'jee18ft05Controller');
    Route::resource('jee18ft06', 'jee18ft06Controller');










    Route::resource('jee18demo01', 'jee18demo01Controller');

    Route::resource('jee18demo02', 'jee18demo02Controller');











    Route::resource('neetphy01tt01', 'neetphy01tt01Controller');
    Route::resource('neetphy01tt02', 'neetphy01tt02Controller');
    Route::resource('neetphy01tt03', 'neetphy01tt03Controller');
    Route::resource('neetphy02tt01', 'neetphy02tt01Controller');
    Route::resource('neetphy02tt02', 'neetphy02tt02Controller');
    Route::resource('neetphy02tt03', 'neetphy02tt03Controller');
    Route::resource('neetphy03tt01', 'neetphy03tt01Controller');
    Route::resource('neetphy03tt02', 'neetphy03tt02Controller');
    Route::resource('neetphy03tt03', 'neetphy03tt03Controller');
    Route::resource('neetphy04tt01', 'neetphy04tt01Controller');
    Route::resource('neetphy04tt02', 'neetphy04tt02Controller');
    Route::resource('neetphy04tt03', 'neetphy04tt03Controller');
    Route::resource('neetphy05tt01', 'neetphy05tt01Controller');
    Route::resource('neetphy05tt02', 'neetphy05tt02Controller');
    Route::resource('neetphy05tt03', 'neetphy05tt03Controller');
    Route::resource('neetphy06tt01', 'neetphy06tt01Controller');
    Route::resource('neetphy06tt02', 'neetphy06tt02Controller');
    Route::resource('neetphy06tt03', 'neetphy06tt03Controller');
    Route::resource('neetphy07tt01', 'neetphy07tt01Controller');
    Route::resource('neetphy07tt02', 'neetphy07tt02Controller');
    Route::resource('neetphy07tt03', 'neetphy07tt03Controller');
    Route::resource('neetphy08tt01', 'neetphy08tt01Controller');
    Route::resource('neetphy08tt02', 'neetphy08tt02Controller');
    Route::resource('neetphy08tt03', 'neetphy08tt03Controller');
    Route::resource('neetphy09tt01', 'neetphy09tt01Controller');
    Route::resource('neetphy09tt02', 'neetphy09tt02Controller');
    Route::resource('neetphy09tt03', 'neetphy09tt03Controller');
    Route::resource('neetphy10tt01', 'neetphy10tt01Controller');
    Route::resource('neetphy10tt02', 'neetphy10tt02Controller');
    Route::resource('neetphy10tt03', 'neetphy10tt03Controller');
    Route::resource('neetphy11tt01', 'neetphy11tt01Controller');
    Route::resource('neetphy11tt02', 'neetphy11tt02Controller');
    Route::resource('neetphy11tt03', 'neetphy11tt03Controller');
    Route::resource('neetphy12tt01', 'neetphy12tt01Controller');
    Route::resource('neetphy12tt02', 'neetphy12tt02Controller');
    Route::resource('neetphy12tt03', 'neetphy12tt03Controller');
    Route::resource('neetphy13tt01', 'neetphy13tt01Controller');
    Route::resource('neetphy13tt02', 'neetphy13tt02Controller');
    Route::resource('neetphy13tt03', 'neetphy13tt03Controller');
    Route::resource('neetphy14tt01', 'neetphy14tt01Controller');
    Route::resource('neetphy14tt02', 'neetphy14tt02Controller');
    Route::resource('neetphy14tt03', 'neetphy14tt03Controller');
    Route::resource('neetphy15tt01', 'neetphy15tt01Controller');
    Route::resource('neetphy15tt02', 'neetphy15tt02Controller');
    Route::resource('neetphy15tt03', 'neetphy15tt03Controller');
    Route::resource('neetphy16tt01', 'neetphy16tt01Controller');
    Route::resource('neetphy16tt02', 'neetphy16tt02Controller');
    Route::resource('neetphy16tt03', 'neetphy16tt03Controller');
    Route::resource('neetphy17tt01', 'neetphy17tt01Controller');
    Route::resource('neetphy17tt02', 'neetphy17tt02Controller');
    Route::resource('neetphy17tt03', 'neetphy17tt03Controller');
    Route::resource('neetphy18tt01', 'neetphy18tt01Controller');
    Route::resource('neetphy18tt02', 'neetphy18tt02Controller');
    Route::resource('neetphy18tt03', 'neetphy18tt03Controller');
    Route::resource('neetphy19tt01', 'neetphy19tt01Controller');
    Route::resource('neetphy19tt02', 'neetphy19tt02Controller');
    Route::resource('neetphy19tt03', 'neetphy19tt03Controller');








    Route::resource('neetchem01tt01', 'neetchem01tt01Controller');
    Route::resource('neetchem01tt02', 'neetchem01tt02Controller');
    Route::resource('neetchem01tt03', 'neetchem01tt03Controller');
    Route::resource('neetchem02tt01', 'neetchem02tt01Controller');
    Route::resource('neetchem02tt02', 'neetchem02tt02Controller');
    Route::resource('neetchem02tt03', 'neetchem02tt03Controller');
    Route::resource('neetchem03tt01', 'neetchem03tt01Controller');
    Route::resource('neetchem03tt02', 'neetchem03tt02Controller');
    Route::resource('neetchem03tt03', 'neetchem03tt03Controller');
    Route::resource('neetchem04tt01', 'neetchem04tt01Controller');
    Route::resource('neetchem04tt02', 'neetchem04tt02Controller');
    Route::resource('neetchem04tt03', 'neetchem04tt03Controller');
    Route::resource('neetchem05tt01', 'neetchem05tt01Controller');
    Route::resource('neetchem05tt02', 'neetchem05tt02Controller');
    Route::resource('neetchem05tt03', 'neetchem05tt03Controller');
    Route::resource('neetchem06tt01', 'neetchem06tt01Controller');
    Route::resource('neetchem06tt02', 'neetchem06tt02Controller');
    Route::resource('neetchem06tt03', 'neetchem06tt03Controller');
    Route::resource('neetchem07tt01', 'neetchem07tt01Controller');
    Route::resource('neetchem07tt02', 'neetchem07tt02Controller');
    Route::resource('neetchem07tt03', 'neetchem07tt03Controller');
    Route::resource('neetchem08tt01', 'neetchem08tt01Controller');
    Route::resource('neetchem08tt02', 'neetchem08tt02Controller');
    Route::resource('neetchem08tt03', 'neetchem08tt03Controller');
    Route::resource('neetchem09tt01', 'neetchem09tt01Controller');
    Route::resource('neetchem09tt02', 'neetchem09tt02Controller');
    Route::resource('neetchem09tt03', 'neetchem09tt03Controller');
    Route::resource('neetchem10tt01', 'neetchem10tt01Controller');
    Route::resource('neetchem10tt02', 'neetchem10tt02Controller');
    Route::resource('neetchem10tt03', 'neetchem10tt03Controller');
    Route::resource('neetchem11tt01', 'neetchem11tt01Controller');
    Route::resource('neetchem11tt02', 'neetchem11tt02Controller');
    Route::resource('neetchem11tt03', 'neetchem11tt03Controller');
    Route::resource('neetchem12tt01', 'neetchem12tt01Controller');
    Route::resource('neetchem12tt02', 'neetchem12tt02Controller');
    Route::resource('neetchem12tt03', 'neetchem12tt03Controller');
    Route::resource('neetchem13tt01', 'neetchem13tt01Controller');
    Route::resource('neetchem13tt02', 'neetchem13tt02Controller');
    Route::resource('neetchem13tt03', 'neetchem13tt03Controller');
    Route::resource('neetchem14tt01', 'neetchem14tt01Controller');
    Route::resource('neetchem14tt02', 'neetchem14tt02Controller');
    Route::resource('neetchem14tt03', 'neetchem14tt03Controller');
    Route::resource('neetchem15tt01', 'neetchem15tt01Controller');
    Route::resource('neetchem15tt02', 'neetchem15tt02Controller');
    Route::resource('neetchem15tt03', 'neetchem15tt03Controller');
    Route::resource('neetchem16tt01', 'neetchem16tt01Controller');
    Route::resource('neetchem16tt02', 'neetchem16tt02Controller');
    Route::resource('neetchem16tt03', 'neetchem16tt03Controller');
    Route::resource('neetchem17tt01', 'neetchem17tt01Controller');
    Route::resource('neetchem17tt02', 'neetchem17tt02Controller');
    Route::resource('neetchem17tt03', 'neetchem17tt03Controller');
    Route::resource('neetchem18tt01', 'neetchem18tt01Controller');
    Route::resource('neetchem18tt02', 'neetchem18tt02Controller');
    Route::resource('neetchem18tt03', 'neetchem18tt03Controller');
    Route::resource('neetchem19tt01', 'neetchem19tt01Controller');
    Route::resource('neetchem19tt02', 'neetchem19tt02Controller');
    Route::resource('neetchem19tt03', 'neetchem19tt03Controller');
    Route::resource('neetchem20tt01', 'neetchem20tt01Controller');
    Route::resource('neetchem20tt02', 'neetchem20tt02Controller');
    Route::resource('neetchem20tt03', 'neetchem20tt03Controller');
    Route::resource('neetchem21tt01', 'neetchem21tt01Controller');
    Route::resource('neetchem21tt02', 'neetchem21tt02Controller');
    Route::resource('neetchem21tt03', 'neetchem21tt03Controller');
    Route::resource('neetchem22tt01', 'neetchem22tt01Controller');
    Route::resource('neetchem22tt02', 'neetchem22tt02Controller');
    Route::resource('neetchem22tt03', 'neetchem22tt03Controller');
    Route::resource('neetchem23tt01', 'neetchem23tt01Controller');
    Route::resource('neetchem23tt02', 'neetchem23tt02Controller');
    Route::resource('neetchem23tt03', 'neetchem23tt03Controller');
    Route::resource('neetchem24tt01', 'neetchem24tt01Controller');
    Route::resource('neetchem24tt02', 'neetchem24tt02Controller');
    Route::resource('neetchem24tt03', 'neetchem24tt03Controller');
    Route::resource('neetchem25tt01', 'neetchem25tt01Controller');
    Route::resource('neetchem25tt02', 'neetchem25tt02Controller');
    Route::resource('neetchem25tt03', 'neetchem25tt03Controller');
    Route::resource('neetchem26tt01', 'neetchem26tt01Controller');
    Route::resource('neetchem26tt02', 'neetchem26tt02Controller');
    Route::resource('neetchem26tt03', 'neetchem26tt03Controller');
    Route::resource('neetchem27tt01', 'neetchem27tt01Controller');
    Route::resource('neetchem27tt02', 'neetchem27tt02Controller');
    Route::resource('neetchem27tt03', 'neetchem27tt03Controller');
    Route::resource('neetchem28tt01', 'neetchem28tt01Controller');
    Route::resource('neetchem28tt02', 'neetchem28tt02Controller');
    Route::resource('neetchem28tt03', 'neetchem28tt03Controller');
    Route::resource('neetchem29tt01', 'neetchem29tt01Controller');
    Route::resource('neetchem29tt02', 'neetchem29tt02Controller');
    Route::resource('neetchem29tt03', 'neetchem29tt03Controller');
    Route::resource('neetchem30tt01', 'neetchem30tt01Controller');
    Route::resource('neetchem30tt02', 'neetchem30tt02Controller');
    Route::resource('neetchem30tt03', 'neetchem30tt03Controller');







    Route::resource('neetbio01tt01', 'neetbio01tt01Controller');
    Route::resource('neetbio01tt02', 'neetbio01tt02Controller');
    Route::resource('neetbio01tt03', 'neetbio01tt03Controller');
    Route::resource('neetbio02tt01', 'neetbio02tt01Controller');
    Route::resource('neetbio02tt02', 'neetbio02tt02Controller');
    Route::resource('neetbio02tt03', 'neetbio02tt03Controller');
    Route::resource('neetbio03tt01', 'neetbio03tt01Controller');
    Route::resource('neetbio03tt02', 'neetbio03tt02Controller');
    Route::resource('neetbio03tt03', 'neetbio03tt03Controller');
    Route::resource('neetbio04tt01', 'neetbio04tt01Controller');
    Route::resource('neetbio04tt02', 'neetbio04tt02Controller');
    Route::resource('neetbio04tt03', 'neetbio04tt03Controller');
    Route::resource('neetbio05tt01', 'neetbio05tt01Controller');
    Route::resource('neetbio05tt02', 'neetbio05tt02Controller');
    Route::resource('neetbio05tt03', 'neetbio05tt03Controller');
    Route::resource('neetbio06tt01', 'neetbio06tt01Controller');
    Route::resource('neetbio06tt02', 'neetbio06tt02Controller');
    Route::resource('neetbio06tt03', 'neetbio06tt03Controller');
    Route::resource('neetbio07tt01', 'neetbio07tt01Controller');
    Route::resource('neetbio07tt02', 'neetbio07tt02Controller');
    Route::resource('neetbio07tt03', 'neetbio07tt03Controller');
    Route::resource('neetbio08tt01', 'neetbio08tt01Controller');
    Route::resource('neetbio08tt02', 'neetbio08tt02Controller');
    Route::resource('neetbio08tt03', 'neetbio08tt03Controller');
    Route::resource('neetbio09tt01', 'neetbio09tt01Controller');
    Route::resource('neetbio09tt02', 'neetbio09tt02Controller');
    Route::resource('neetbio09tt03', 'neetbio09tt03Controller');
    Route::resource('neetbio10tt01', 'neetbio10tt01Controller');
    Route::resource('neetbio10tt02', 'neetbio10tt02Controller');
    Route::resource('neetbio10tt03', 'neetbio10tt03Controller');










    Route::resource('neet18ft01', 'neet18ft01Controller');
    Route::resource('neet18ft02', 'neet18ft02Controller');
    Route::resource('neet18ft03', 'neet18ft03Controller');
    Route::resource('neet18ft04', 'neet18ft04Controller');
    Route::resource('neet18ft05', 'neet18ft05Controller');
    Route::resource('neet18ft06', 'neet18ft06Controller');










    Route::resource('neet18demo01', 'neet18demo01Controller');
    Route::resource('neet18demo02', 'neet18demo02Controller');







    Route::resource('jipphy01tt01', 'jipphy01tt01Controller');
    Route::resource('jipphy01tt02', 'jipphy01tt01Controller');
    Route::resource('jipphy01tt03', 'jipphy01tt01Controller');
    Route::resource('jipphy02tt01', 'jipphy02tt01Controller');
    Route::resource('jipphy02tt02', 'jipphy02tt01Controller');
    Route::resource('jipphy02tt03', 'jipphy02tt01Controller');
    Route::resource('jipphy03tt01', 'jipphy03tt01Controller');
    Route::resource('jipphy03tt02', 'jipphy03tt01Controller');
    Route::resource('jipphy03tt03', 'jipphy03tt01Controller');
    Route::resource('jipphy04tt01', 'jipphy04tt01Controller');
    Route::resource('jipphy04tt02', 'jipphy04tt01Controller');
    Route::resource('jipphy04tt03', 'jipphy04tt01Controller');
    Route::resource('jipphy05tt01', 'jipphy05tt01Controller');
    Route::resource('jipphy05tt02', 'jipphy05tt01Controller');
    Route::resource('jipphy05tt03', 'jipphy05tt01Controller');
    Route::resource('jipphy06tt01', 'jipphy06tt01Controller');
    Route::resource('jipphy06tt02', 'jipphy06tt01Controller');
    Route::resource('jipphy06tt03', 'jipphy06tt01Controller');
    Route::resource('jipphy07tt01', 'jipphy07tt01Controller');
    Route::resource('jipphy07tt02', 'jipphy07tt01Controller');
    Route::resource('jipphy07tt03', 'jipphy07tt01Controller');
    Route::resource('jipphy08tt01', 'jipphy08tt01Controller');
    Route::resource('jipphy08tt02', 'jipphy08tt01Controller');
    Route::resource('jipphy08tt03', 'jipphy08tt01Controller');
    Route::resource('jipphy09tt01', 'jipphy09tt01Controller');
    Route::resource('jipphy09tt02', 'jipphy09tt01Controller');
    Route::resource('jipphy09tt03', 'jipphy09tt01Controller');
    Route::resource('jipphy10tt01', 'jipphy10tt01Controller');
    Route::resource('jipphy10tt02', 'jipphy10tt01Controller');
    Route::resource('jipphy10tt03', 'jipphy10tt01Controller');
    Route::resource('jipphy11tt01', 'jipphy11tt01Controller');
    Route::resource('jipphy11tt02', 'jipphy11tt01Controller');
    Route::resource('jipphy11tt03', 'jipphy11tt01Controller');
    Route::resource('jipphy12tt01', 'jipphy12tt01Controller');
    Route::resource('jipphy12tt02', 'jipphy12tt01Controller');
    Route::resource('jipphy12tt03', 'jipphy12tt01Controller');
    Route::resource('jipphy13tt01', 'jipphy13tt01Controller');
    Route::resource('jipphy13tt02', 'jipphy13tt01Controller');
    Route::resource('jipphy13tt03', 'jipphy13tt01Controller');
    Route::resource('jipphy14tt01', 'jipphy14tt01Controller');
    Route::resource('jipphy14tt02', 'jipphy14tt01Controller');
    Route::resource('jipphy14tt03', 'jipphy14tt01Controller');
    Route::resource('jipphy15tt01', 'jipphy15tt01Controller');
    Route::resource('jipphy15tt02', 'jipphy15tt01Controller');
    Route::resource('jipphy15tt03', 'jipphy15tt01Controller');
    Route::resource('jipphy16tt01', 'jipphy16tt01Controller');
    Route::resource('jipphy16tt02', 'jipphy16tt01Controller');
    Route::resource('jipphy16tt03', 'jipphy16tt01Controller');
    Route::resource('jipphy17tt01', 'jipphy17tt01Controller');
    Route::resource('jipphy17tt02', 'jipphy17tt01Controller');
    Route::resource('jipphy17tt03', 'jipphy17tt01Controller');
    Route::resource('jipphy18tt01', 'jipphy18tt01Controller');
    Route::resource('jipphy18tt02', 'jipphy18tt01Controller');
    Route::resource('jipphy18tt03', 'jipphy18tt01Controller');
    Route::resource('jipphy19tt01', 'jipphy19tt01Controller');
    Route::resource('jipphy19tt02', 'jipphy19tt01Controller');
    Route::resource('jipphy19tt03', 'jipphy19tt01Controller');









    Route::resource('jipchem01tt01', 'jipchem01tt01Controller');
    Route::resource('jipchem01tt02', 'jipchem01tt01Controller');

    Route::resource('jipchem01tt03', 'jipchem01tt01Controller');

    Route::resource('jipchem02tt01', 'jipchem02tt01Controller');

    Route::resource('jipchem02tt02', 'jipchem02tt01Controller');

    Route::resource('jipchem02tt03', 'jipchem02tt01Controller');

    Route::resource('jipchem03tt01', 'jipchem03tt01Controller');

    Route::resource('jipchem03tt02', 'jipchem03tt01Controller');

    Route::resource('jipchem03tt03', 'jipchem03tt01Controller');

    Route::resource('jipchem04tt01', 'jipchem04tt01Controller');

    Route::resource('jipchem04tt02', 'jipchem04tt01Controller');

    Route::resource('jipchem04tt03', 'jipchem04tt01Controller');

    Route::resource('jipchem05tt01', 'jipchem05tt01Controller');

    Route::resource('jipchem05tt02', 'jipchem05tt01Controller');

    Route::resource('jipchem05tt03', 'jipchem05tt01Controller');

    Route::resource('jipchem06tt01', 'jipchem06tt01Controller');

    Route::resource('jipchem06tt02', 'jipchem06tt01Controller');

    Route::resource('jipchem06tt03', 'jipchem06tt01Controller');

    Route::resource('jipchem07tt01', 'jipchem07tt01Controller');

    Route::resource('jipchem07tt02', 'jipchem07tt01Controller');

    Route::resource('jipchem07tt03', 'jipchem07tt01Controller');

    Route::resource('jipchem08tt01', 'jipchem08tt01Controller');

    Route::resource('jipchem08tt02', 'jipchem08tt01Controller');

    Route::resource('jipchem08tt03', 'jipchem08tt01Controller');
    Route::resource('jipchem09tt01', 'jipchem09tt01Controller');

    Route::resource('jipchem09tt02', 'jipchem09tt01Controller');

    Route::resource('jipchem09tt03', 'jipchem09tt01Controller');

    Route::resource('jipchem10tt01', 'jipchem10tt01Controller');

    Route::resource('jipchem10tt02', 'jipchem10tt01Controller');

    Route::resource('jipchem10tt03', 'jipchem10tt01Controller');

    Route::resource('jipchem11tt01', 'jipchem11tt01Controller');

    Route::resource('jipchem11tt02', 'jipchem11tt01Controller');

    Route::resource('jipchem11tt03', 'jipchem11tt01Controller');

    Route::resource('jipchem12tt01', 'jipchem12tt01Controller');

    Route::resource('jipchem12tt02', 'jipchem12tt01Controller');

    Route::resource('jipchem12tt03', 'jipchem12tt01Controller');

    Route::resource('jipchem13tt01', 'jipchem13tt01Controller');
    Route::resource('jipchem13tt02', 'jipchem13tt01Controller');

    Route::resource('jipchem13tt03', 'jipchem13tt01Controller');

    Route::resource('jipchem14tt01', 'jipchem14tt01Controller');

    Route::resource('jipchem14tt02', 'jipchem14tt01Controller');

    Route::resource('jipchem14tt03', 'jipchem14tt01Controller');

    Route::resource('jipchem15tt01', 'jipchem15tt01Controller');

    Route::resource('jipchem15tt02', 'jipchem15tt01Controller');

    Route::resource('jipchem15tt03', 'jipchem15tt01Controller');

    Route::resource('jipchem16tt01', 'jipchem16tt01Controller');

    Route::resource('jipchem16tt02', 'jipchem16tt01Controller');

    Route::resource('jipchem16tt03', 'jipchem16tt01Controller');

    Route::resource('jipchem17tt01', 'jipchem17tt01Controller');

    Route::resource('jipchem17tt02', 'jipchem17tt01Controller');

    Route::resource('jipchem17tt03', 'jipchem17tt01Controller');

    Route::resource('jipchem18tt01', 'jipchem18tt01Controller');

    Route::resource('jipchem18tt02', 'jipchem18tt01Controller');

    Route::resource('jipchem18tt03', 'jipchem18tt01Controller');

    Route::resource('jipchem19tt01', 'jipchem19tt01Controller');

    Route::resource('jipchem19tt02', 'jipchem19tt01Controller');

    Route::resource('jipchem19tt03', 'jipchem19tt01Controller');

    Route::resource('jipchem20tt01', 'jipchem20tt01Controller');

    Route::resource('jipchem20tt02', 'jipchem20tt01Controller');

    Route::resource('jipchem20tt03', 'jipchem20tt01Controller');

    Route::resource('jipchem21tt01', 'jipchem21tt01Controller');

    Route::resource('jipchem21tt02', 'jipchem21tt01Controller');

    Route::resource('jipchem21tt03', 'jipchem21tt01Controller');

    Route::resource('jipchem22tt01', 'jipchem22tt01Controller');

    Route::resource('jipchem22tt02', 'jipchem22tt01Controller');

    Route::resource('jipchem22tt03', 'jipchem22tt01Controller');

    Route::resource('jipchem23tt01', 'jipchem23tt01Controller');

    Route::resource('jipchem23tt02', 'jipchem23tt01Controller');

    Route::resource('jipchem23tt03', 'jipchem23tt01Controller');
    Route::resource('jipchem24tt01', 'jipchem24tt01Controller');

    Route::resource('jipchem24tt02', 'jipchem24tt01Controller');

    Route::resource('jipchem24tt03', 'jipchem24tt01Controller');

    Route::resource('jipchem25tt01', 'jipchem25tt01Controller');

    Route::resource('jipchem25tt02', 'jipchem25tt01Controller');

    Route::resource('jipchem25tt03', 'jipchem25tt01Controller');









    Route::resource('jipbio01tt01', 'jipbio01tt01Controller');

    Route::resource('jipbio01tt02', 'jipbio01tt02Controller');


    Route::resource('jipbio01tt03', 'jipbio01tt03Controller');


    Route::resource('jipbio02tt01', 'jipbio02tt01Controller');


    Route::resource('jipbio02tt02', 'jipbio02tt02Controller');


    Route::resource('jipbio02tt03', 'jipbio02tt03Controller');


    Route::resource('jipbio03tt01', 'jipbio03tt01Controller');


    Route::resource('jipbio03tt02', 'jipbio03tt02Controller');


    Route::resource('jipbio03tt03', 'jipbio03tt03Controller');


    Route::resource('jipbio04tt01', 'jipbio04tt01Controller');


    Route::resource('jipbio04tt02', 'jipbio04tt02Controller');


    Route::resource('jipbio04tt03', 'jipbio04tt03Controller');


    Route::resource('jipbio05tt01', 'jipbio05tt01Controller');


    Route::resource('jipbio05tt02', 'jipbio05tt02Controller');


    Route::resource('jipbio05tt03', 'jipbio05tt03Controller');


    Route::resource('jipbio06tt01', 'jipbio06tt01Controller');


    Route::resource('jipbio06tt02', 'jipbio06tt02Controller');


    Route::resource('jipbio06tt03', 'jipbio06tt03Controller');


    Route::resource('jipbio07tt01', 'jipbio07tt01Controller');


    Route::resource('jipbio07tt02', 'jipbio07tt02Controller');


    Route::resource('jipbio07tt03', 'jipbio07tt03Controller');


    Route::resource('jipbio08tt01', 'jipbio08tt01Controller');


    Route::resource('jipbio08tt02', 'jipbio08tt02Controller');


    Route::resource('jipbio08tt03', 'jipbio08tt03Controller');


    Route::resource('jipbio09tt01', 'jipbio09tt01Controller');


    Route::resource('jipbio09tt02', 'jipbio09tt02Controller');


    Route::resource('jipbio09tt03', 'jipbio09tt03Controller');


    Route::resource('jipbio10tt01', 'jipbio10tt01Controller');


    Route::resource('jipbio10tt02', 'jipbio10tt02Controller');


    Route::resource('jipbio10tt03', 'jipbio10tt03Controller');










    Route::resource('jipengtt01', 'jipengtt01Controller');
    Route::resource('jipengtt02', 'jipengtt02Controller');
    Route::resource('jipengtt03', 'jipengtt03Controller');
    Route::resource('jipengtt04', 'jipengtt04Controller');
    Route::resource('jipengtt05', 'jipengtt05Controller');










    Route::resource('jiplartt01', 'jiplartt01Controller');
    Route::resource('jiplartt02', 'jiplartt02Controller');
    Route::resource('jiplartt03', 'jiplartt03Controller');
    Route::resource('jiplartt04', 'jiplartt04Controller');
    Route::resource('jiplartt05', 'jiplartt05Controller');












    Route::resource('jip18ft01', 'jip18ft01Controller');

    Route::resource('jip18ft02', 'jip18ft02Controller');

    Route::resource('jip18ft03', 'jip18ft03Controller');

    Route::resource('jip18ft04', 'jip18ft04Controller');

    Route::resource('jip18ft05', 'jip18ft05Controller');

    Route::resource('jip18ft06', 'jip18ft06Controller');








    Route::resource('jip18demo01', 'jip18demo01Controller');

    Route::resource('jip18demo02', 'jip18demo02Controller');




});














Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




