<?php

class ProfesoresController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
		public function index()
	{
		 //$users = User::all();
       // return View::make('index', compact('users'));
		// show the form
	// 	return View::make('login');
	
	// }

	// public function showProfesores()
	// {
		 $profesores = Profesor::all();
        return View::make('index', compact('profesores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	 return View::make('create');
	}

	public function handleCreate() {
        $profesor = new Profesor;
        $profesor->name = Input::get('name');
        $profesor->rfc= Input::get('rfc');
        $profesor->email = Input::get('email');
        $profesor->cargo = Input::get('cargo');
        $profesor->password = Input::get('password');
        $profesor->save();
        return Redirect::action('ProfesoresController@index');
	}

public function edit(Profesor $profesor)
    {
        // Show the edit profesor form.
        return View::make('edit', compact('profesor'));
    }
public function handleEdit()
    {
        // Handle edit form submission.
        $profesor = Profesor::findOrFail(Input::get('id'));
        $profesor->name        = Input::get('name');
        $profesor->rfc           = Input::get('rfc');
        $profesor->email                = Input::get('email');
        $profesor->cargo = Input::get('cargo');
        $profesor->password = Input::get('password');
        $profesor->save();
    	return Redirect::action('ProfesoresController@index');
    }
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function store()
	{
	
$rules = array(
			'name'    => 'required|min:3',
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);
		// run the validation rules on the inputs from the form
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
public function handleDelete()
    {
         // Handle the delete confirmation.
        $id = Input::get('profesor');
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return Redirect::action('ProfesoresController@index');
    }

public function delete(Profesor $profesor)
    {
        // Show delete confirmation page.
        return View::make('delete', compact('profesor'));
    }

}