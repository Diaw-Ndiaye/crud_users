<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;
use App\Categorie;
use App\Tag;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'name'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'password'=>'required',
            'avatar'=>'required',
        ]);
          $user = new User();
          $user->name = $request->input('name');
          $user->prenom = $request->input('prenom');
          $user->email = $request->input('email');
          $user->password = $request->input('password');
          $user->avatar = $request->input('avatar');
          $user->avatar = $request->file('avatar'); 
          $user->save();
          return redirect()->route('users.index')->with('success', 'Bien Enregistrer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findORFail($id);
        return view('users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findORFail($id);
        return view('users.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
          $users = User::findORFail($id);
          $users->name = $request->input('name');
          $users->prenom = $request->input('prenom');
          $users->email = $request->input('email');
          $users->password = $request->input('password');
          $users->avatar = $request->input('avatar');
          $users->avatar = $request->file('avatar'); 
          $users->update();
          return redirect()->route('login.index')->with('success', 'Bienvenu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
