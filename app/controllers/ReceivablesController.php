<?php

class ReceivablesController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getCheckList()
	{
		$data = array();
		$data['allReceivables'] = Receivables::paginate(15);

		return View::make('checklist')->with("data", $data);
	}

	public function searchByNumber($q){
		$data = array();
		//echo $q;
		$results = DB::select('select * from users where id = ?', array(1));
		
	}

}