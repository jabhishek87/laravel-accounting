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

	public function getCheckListAjax()
	{

		$allReceivables = Receivables::select(array('receivables.status','receivables.number','receivables.amount'));
		return Datatables::of($allReceivables)->make();
	}

	public function searchByNumber($q){
		//$data = array();
		//echo $q;
		$results = Receivables::where('number', 'LIKE', '%'.$q.'%')->get();
		//$results = DB::select('select * from receivables where number = ?', array(q));
		//print_r($results);
		foreach($results as $item)
		{
			$data[] =  $item->number;
		}
		return json_encode($data);
	}

}