<?php

class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function activate($id = '', $code = '')
	{
		$user = \App\User::find($id);

		if ($user->confirmation === $code && !$user->active) {
			$user->active = 1;
			$user->save;
			
			return view('login');
		} elseif ($user->confirmation === $code && $user->active) {
			return 'ai confirmat deja';
		} else {
			return 'pagina nu exista';
		}
	}

}
