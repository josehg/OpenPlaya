<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get( '/' , function()
{
	return View::make( 'inicio' );
} );


Route::get( 'usuario/login' , function()
{
	return View::make( 'usuario.login' );
} );

Route::post( 'usuario/login' , 'UserController@login' );

Route::get( 'usuario/{id}' , 'UserController@showProfile' );


Route::get( 'playas' , 'PlayaController@listaPlayas' );
Route::get( 'playa' , function()
{
	return Redirect::to( 'playas' );
} );

Route::get( 'playa/{id}' , 'PlayaController@verPlaya' );


Route::get( 'usuario' , function()
{
	return Redirect::to( 'usuario/login' );
} );

Route::get( 'acerca-de' , function()
{
	return View::make( 'acerca-de' );
} );

Route::get( 'contacto' , function()
{
	return View::make( 'contacto' );
} );
