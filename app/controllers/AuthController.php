<?php

class AuthController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Controlador de la autenticación de usuarios
	|--------------------------------------------------------------------------
	*/



	/**
	 * Muestra el formulario para login.
	 */
	public function showLogin()
	{
		// Verificamos que el usuario no este autenticado
		if (Auth::check())
		{
		    // Si esta autenticado lo mandamos a home.
		    return Redirect::to('/home');
		}
		return View::make('login');
	}

}