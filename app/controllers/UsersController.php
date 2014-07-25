<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$users = User::all();
		return 	View::make('users.index', compact('users'));

		
        $users = User::all();
        $users->toarray();

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$marital_status = array('single','Divorced','Engaged','Complicated','Married');
		return View::make('users.create', compact('marital_status'));

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//capture form data
		//dob (y-m-d)
		$dob = Input::get('dob');
		$datestring =$dob['year'].'-'.$dob['month'].'-'.$dob['day'];
		//merge new date string to input
		Input::merge(['dob' => $datestring]);
		$payload = Input::all();
		//validate data and return errors if input not entered
		$validation = Validator::make($payload, User::$rules);

		if($validation->passes())
		{
			//save data to database
			$user = User::create($payload);
			//redirect to profilepage
			return Redirect::route('user.show', array($user->id));

		
		}
		else
		{
			//Redirect to form page
			return Redirect::back()->withErrors($validation);
		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$user = User::find($id);

		return View::make('users.show',compact('user'));
		

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$user =  User::find($id);

		$marital_status = array('single','Divorced','Engaged','Complicated','Married');
		return View::make('users.edit',compact('user','marital_status'));

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$user = User::find($id);
		$dob = Input::get('dob');
		$datestring =$dob['year'].'-'.$dob['month'].'-'.$dob['day'];
		//merge new date string to input
		Input::merge(['dob' => $datestring]);
		$payload = Input::except('_token');

		$validation = Validator::make($payload, User::$updateRules);

		if($validation->passes())
		{
			//save data to database
			$user->update($payload);
			//redirect to profilepage
			if($user){
				return Redirect::route('users.show', array($user->id))->with('alert','Record Updated');
			}
		
		}
		else
		{
			//Redirect to form page
			return Redirect::back()->withErrors($validation)->withInput();
		}
		

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//Delete user
        User::find($id)->delete();
        return Redirect::route('users.index');
    
	}
}
