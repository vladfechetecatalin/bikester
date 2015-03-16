<?php

class PostController extends Controller {

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
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
		return view('post.post');
	}

	public function postBike()
	{
		return view('post.post-bike');
	}

	public function saveBike($fields = '')
	{
		print_r(Input::all());die();
	}

	public function postEquipment()
	{
		return view('post.post-equipment');
	}

	public function postPieseNoi()
	{
		return view('post.post-piese-noi');
	}

	public function getBikeModels($id = '')
	{
		return Response::json(['status' => 'ok', 'models' => Makes::find($id)->models]);
	}

	public function imageUpload($image = '')
	{

		// print_r(Input::all());die();
		$file = Input::file('image');
        $input = array('image' => $file);

        $rules = array(
            'image' => 'image'
        );

        $validator = Validator::make($input, $rules);

        if ( $validator->fails() ) {
            return Response::json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()]);
        } else {
            $destinationPath = 'uploads/';
            $filename = $file->getClientOriginalName();
            Input::file('image')->move($destinationPath, $filename);
            return Response::json(['success' => true, 'file' => asset($destinationPath.$filename)]);
        }
	}

}
