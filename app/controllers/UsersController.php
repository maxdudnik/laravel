<?php

class UsersController extends \BaseController
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Redirect::route('users.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user = new User;

        $user->username = Input::get('username');
        $user->password = Hash::make(Input::old('password'));
        $user->email = Input::get('email');
        $user->firstname = Input::get('firstname');
        $user->lastname = Input::get('lastname');
        $user->gender = Input::get('gender');
        $user->about = Input::get('about');
        $user->save();

        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = Auth::user();

        return View::make('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        return View::make('users.edit')->with('user', $user);
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

        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->email = Input::get('email');
        $user->firstname = Input::get('firstname');
        $user->lastname = Input::get('lastname');
        $user->gender = Input::get('gender');
        $user->about = Input::get('about');
        $user->save();

        return Redirect::route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
