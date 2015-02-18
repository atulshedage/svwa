<?php

/*
 * Home Page Of DVWA
 */
Route::get('/',[
	'as' => 'home',
	'uses' => 'HomeController@index',
]);

/*
 * Signin Section
 */
Route::get('signin',[
	'as' => 'signin_path',
	'uses' => 'SessionController@index'
]);

Route::post('signin',[
	'as' => 'signin_path',
	'uses' => 'SessionController@store'
]);

/*
 * Logout User
 */

Route::get('signout',[
	'as' => 'logout_path',
	'uses' => 'SessionController@destroy'
]);

/*
 * Sign Up Section
 */

Route::get('signup',[
	'as' => 'signup_path',
	'uses' => 'SignUpController@index'
]);

Route::post('signup',[
	'as' => 'signup_path',
	'uses' => 'SignUpController@store'
]);


/*
 * Pages Section
 * Instruction Section
 */

Route::get('instruction',[
	'as' => 'instruction_path',
	'uses' => 'PagesController@instruction'
]);

Route::get('vulnerabilitites',[
	'as' => 'vulnerability_path',
	'uses' => 'PagesController@vulnerabilitites'
]);

Route::get('about',[
	'as' => 'about_path',
	'uses' => 'PagesController@about'
]);


/*
 * Vulnerabilities List
 * Reflected Xss
 */

Route::get('Reflected-Xss',[
	'as' => 'reflected_xss_path',
	'uses' => 'XssController@ReflectedXss'
]);

Route::get('Source-Code-Xss',[
	'as' => 'source_code_xss_path',
	'uses' => 'XssController@SourceCodeXss'
]);
/*
 * Stored Xss Via Blog Post
 */
Route::get('Stored-Xss',[
	'as' => 'stored_xss_path',
	'uses' => 'XssController@StoredIndex'
]);

Route::post('Stored-Xss',[
	'as' => 'stored_xss_path',
	'uses' => 'XssController@StoredXss'
]);

Route::delete('delete-comment/{id}',[
	'as' => 'delete_comment',
	'uses' => 'XssController@delete'
]);
/*
 * Browser xss
 */
Route::get('Browser-Xss',[
	'as' => 'browser_xss_path',
	'uses' => 'XssController@BrowserXssIndex'
]);

Route::post('Browser-Xss',[
	'as' => 'browser_xss_path',
	'uses' => 'XssController@BrowserXssStore'
]);

/*
 * CSRF Vulnerability
 * Update Profile Page
 */
Route::get('csrf-normal',[
	'as' => 'csrf_path',
	'uses' => 'XssController@CsrfIndex'
]);

Route::get('csrf-bypass',[
	'as' => 'csrf_bypass_path',
	'uses' => 'XssController@CsrfbypassIndex'
]);

Route::post('csrf-normal',[
	'as' => 'csrf_path',
	'uses' => 'XssController@StoredXss'
]);


/*
 * Privilege Escalation Vunerability
 */

Route::get('privilege-escalation',[
	'as' => 'priv_path',
	'uses' => 'PrivController@index'
]);

Route::post('privilege-escalation',[
	'as' => 'priv_path',
	'uses' => 'PrivController@store'
]);

/*
 * SQL Injection
 */

Route::get('Normal-Sql',[
	'as' => 'normal_injection_path',
	'uses' => 'SqlInjectionController@index'
]);

/*
 * Sensitive Data Exposure Vulnerability
 */
Route::get('clickjacking',[
	'as' => 'clickjacking_path',
	'uses' => 'SensitiveDataController@clickjack'
]);

/*
 * Redirection
 */

Route::get('redirection',[
	'as' => 'redirect_path',
	'uses' => 'OpenredirectionController@openRedirect'
]);



/*
 * File Inclusion
 */

Route::get('page',[
	'as' => 'get_page',
	'uses' => 'FileinclusionController@index'
]);

/*
 * Login Bypass
 */

Route::get('loginBypass',[
	'as' => 'login_bypass_path',
	'uses' => 'SqlInjectionController@loginBypassGet'
]);
Route::post('loginBypass',[
	'as' => 'login_bypass_path',
	'uses' => 'SqlInjectionController@loginBypass'
]);

/*
 * 404 Page
 */

Route::get('404','PagesController@error_404');