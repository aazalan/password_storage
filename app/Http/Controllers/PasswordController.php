<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $passwords = Password::paginate(6);

        return Inertia::render('ShowPage', ['passwords' => $passwords]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('CreatePage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|min:5', 
            'login' => 'required|min:5'
        ]);

        Password::create([
            'password_password' => $validated['password'],
            'password_login' => $validated['login']
        ]);
    
        return redirect('/');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $password = Password::where('password_id', $id)->first();
        return Inertia::render('EditPage', [
            'password_data' => [
                'id' => $password->password_id,
                'password' => $password->password_password,
                'login' => $password->password_login
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'password' => 'required|min:5', 
            'login' => 'required|min:5'
        ]);

        Password::where('password_id', $id)
            ->update([
                'password_password' => $validated['password'],
                'password_login' => $validated['login']
            ]);
        
        return redirect('/');
    }

}
