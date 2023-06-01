<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $user_id = Auth::id();
        $users = User::where('id', '!=', $user_id)->get();

        return Inertia::render('Users', [
            'users' => $users,
        ]);
    }
}
