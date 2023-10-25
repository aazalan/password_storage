<?php

use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('login', [LoginController::class, 'create'])->name('login');

// Route::post('login', [LoginController::class, 'store'])->name('login');

// Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');


// Route::middleware('auth')->group(function() {

//     Route::get('/', function () {
//         return Inertia::render('Home');
//     });
    
    
//     Route::get('/users', function (Request $request) {
//         return Inertia::render('Users/Index', [
//             'users' => User::query()
//                 ->when($request->search, function ($query, $search) {
//                     $query->where('name', 'like', '%' . $search . '%');
//                 })
//                 ->paginate(10)
//                 ->withQueryString()
//                 ->through(fn($user) => [
//                     'id' => $user->id,
//                     'name' => $user->name,
//                     'can' => [
//                         'editUser' => Auth::user()->can('edit', $user)
//                     ]
//                 ]),
//             'filters' => $request->only('search'),
//             'can' => [
//                 'createUser' => Auth::user()->can('create', User::class)
//             ]
//         ]);
//     });
    
    
//     Route::get('/users/create', function () {
//         return Inertia::render('Users/Create');
//     })->can('create', 'App\Models\User');
    
    
//     Route::post('/users', function (Request $request) {
//         $validated = $request->validate([
//             'name' => 'required',
//             'email' => ['required', 'email', 'unique:users,email'],
//             'password' => 'required',
//         ]);
    
//         User::create($validated);
        
//         return redirect('/users');
//     });
    
    
//     Route::get('/settings', function () {
//         return Inertia::render('Settings');
//     });

// });

Route::get('/', [PasswordController::class, 'index']);

Route::get('/password', [PasswordController::class, 'create']);

Route::get('/password/{id}', [PasswordController::class, 'edit']);

Route::post('/password', [PasswordController::class, 'store']);

Route::post('/password/{id}', [PasswordController::class, 'update']);

