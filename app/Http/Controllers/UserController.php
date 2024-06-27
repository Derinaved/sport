<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        $data = request()->validate([
            'email' => 'string',
            'password' => 'int',
        ]);
        $user = User::query()->where('email', $data['email'])->get();
        if ($user->get(0)['password'] == $data['password']) {
            return redirect()->route('show', $user->get(0)['id']);
        } else {
            return redirect()->route('index');
        }
    }

    public function group(User $user)
    {
        return view('group', compact('user'));
    }
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
            'item' => 'string',
            'email' => 'string',
            'password' => 'string',
        ]);
        $users = new  User($data);
        $users->save();
        return redirect()->route('show', $users->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
